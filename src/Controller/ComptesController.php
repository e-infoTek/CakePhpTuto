<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comptes Controller
 *
 * @property \App\Model\Table\ComptesTable $Comptes
 *
 * @method \App\Model\Entity\Compte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComptesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $comptes = $this->paginate($this->Comptes);

        $this->set(compact('comptes'));
    }

    /**
     * View method
     *
     * @param string|null $id Compte id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compte = $this->Comptes->get($id, [
            'contain' => [],
        ]);

        $this->set('compte', $compte);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compte = $this->Comptes->newEmptyEntity();
        if ($this->request->is('post')) {
            $compte = $this->Comptes->patchEntity($compte, $this->request->getData());
            if ($this->Comptes->save($compte)) {
                $this->Flash->success(__('The compte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compte could not be saved. Please, try again.'));
        }
        $this->set(compact('compte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compte id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compte = $this->Comptes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compte = $this->Comptes->patchEntity($compte, $this->request->getData());
            if ($this->Comptes->save($compte)) {
                $this->Flash->success(__('The compte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compte could not be saved. Please, try again.'));
        }
        $this->set(compact('compte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compte id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compte = $this->Comptes->get($id);
        if ($this->Comptes->delete($compte)) {
            $this->Flash->success(__('The compte has been deleted.'));
        } else {
            $this->Flash->error(__('The compte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
