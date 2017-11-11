<?php

namespace App\Controller\Apibundle;

use App\Utility\Tools;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends InitController
{


    public function setLoginForm()
    {
        if ($this->request->is('post')) {


            $response = $this->checkLogin($this->request->getData('cellphone_code'), $this->request->getData('cellphone'), $this->request->getData('password'));
            $this->apiResponse['jwt'] = $response['jwt'];
            $this->apiResponse['flash'] = $response['flash'];
            $this->httpStatusCode = $response['httpStatusCode'];
        } else {
            $this->httpStatusCode = 405;
        }
    }


    public function getUsers()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        $users = $this->Users->find()->order(['Users.firstname' => 'asc']);
        $this->apiResponse['data']['users'] = $users;

    }

    public function getUser($id)
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        $user = $this->Users->find()->where(['Users.id' => $id])->first();
        $this->apiResponse['data']['user'] = $user;
        if (!$user) {
            $this->httpStatusCode = 404;
        }

    }

    public function getMe()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        $user = $this->Users->find()->where(['Users.id' => $payloads->user->id])->first();
        $this->apiResponse['data']['user'] = $user;
        if (!$user) {
            $this->httpStatusCode = 404;
        }

    }

    public function setProfileForm()
    {

        if ($this->request->is('patch')) {
            $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
            $user = $this->Users->find()->where(['Users.id' => $payloads->user->id])->first();
            if (!$user) {
                $this->httpStatusCode = 404;
                $this->apiResponse['flash'] = "Compte non trouvé";
            } else {

                if (!empty($this->request->getData('birth'))) {
                    $this->request->data['birth'] = substr($this->request->getData('birth'), 0, 10);
                }

                $user = $this->Users->patchEntity($user, $this->request->getData(), ['fieldList' => ['firstname', 'lastname', 'email', 'sex', 'street_number', 'route', 'postal_code', 'locality', 'country', 'country_short', 'lat', 'lng', 'cellphone_code', 'cellphone', 'phone_code',  'phone', 'birth', 'presentation', 'profession', 'notification_anniversary', 'notification_event', 'notification_poll', 'branch', 'password1', 'password2']]);
                !empty($user->password1) ? $user->password = $user->password1 : '';

                if ($r = $this->Users->save($user)) {
                    //(new Socket($this->request->getHeaderLine('Authorization')))->emit('xx', ['xx' => 'xx']);
                    $this->apiResponse['flash'] = "Modification effectuée";
                } else {
                    $this->httpStatusCode = 402;
                    $this->apiResponse['data']['_form']['errors'] = Tools::getErrors($user->errors());
                }
            }
        } else {
            $this->httpStatusCode = 405;
        }
    }


    public function setPictureForm()
    {

        if ($this->request->is('patch')) {
            $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
            $user = $this->Users->find()->where(['Users.id' => $payloads->user->id])->first();
            if (!$user) {
                $this->httpStatusCode = 404;
                $this->apiResponse['flash'] = "Compte non trouvé";
            } else {

                if ($this->request->getData('picture')) {
                    $picture_new_name = Tools::_getRandomFilename(20) . '.jpg';
                    $jpeg = Tools::base64ToJpeg($this->request->getData('picture'));

                    if (!is_dir(MEDIA_USER_PATH . $user->id)) {
                        if (!mkdir(MEDIA_USER_PATH . $user->id, 0777, true)) {

                        }
                    }

                    if (imagejpeg($jpeg, MEDIA_USER_PATH . $user->id . DS . $picture_new_name, 100)) {

                        $user->picture = $picture_new_name;

                        if ($this->Users->save($user)) {
                            $this->apiResponse['data']['toto'] = 'toto';
                            //(new Socket($this->request->getHeaderLine('Authorization')))->emit('xx', ['xx' => 'xx']);
                        } else {
                            $this->httpStatusCode = 402;
                            $this->apiResponse['flash'] = "Une erreur est survenue lors de la sauvegarde de la photo";
                        }
                    }
                }

            }
        } else {
            $this->httpStatusCode = 405;
        }
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['ChatMessages', 'Discussions', 'EventComments', 'Events', 'EventParticipations', 'PollAnswers', 'Polls', 'Relations']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
