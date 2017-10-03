<?php

namespace TicketManagement\Controller;

use TicketManagement\Form\TicketForm;
use TicketManagement\Model\Ticket;
use TicketManagement\Model\TicketTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TicketController extends AbstractActionController {

    private $table_ticket;

    public function __construct(TicketTable $table_ticket) {

        $this->table_ticket = $table_ticket;
    }

//    public function __construct(TicketTable $table)
//    {
//        $this->table = $table;
//    }

    public function indexAction() {
        return new ViewModel();
    }

    public function getTicketsAction() {
        $param_ = $this->getEvent()->getRouteMatch()->getParam('param');
        $resultSet = $this->table_ticket->fetchAllTickets();//['type' => $param_]
        return new JsonModel($resultSet);
    }

    public function addAction() {
//        $form = new TicketForm();
//        $form->get('submit')->setValue('Add');
//
//        $request = $this->getRequest();
//
//        if (!$request->isPost()) {
//            return ['form' => $form];
//        }
//
//        $album = new Ticket();
//        $form->setInputFilter($album->getInputFilter());
//        $form->setData($request->getPost());
//
//        if (!$form->isValid()) {
//            return ['form' => $form];
//        }
//
//        $album->exchangeArray($form->getData());
//        $this->table->saveTicket($album);
//
//        return $this->redirect()->toRoute('album');
    }

    public function editAction() {
//        $id = (int) $this->params()->fromRoute('id', 0);
//
//        if (0 === $id) {
//            return $this->redirect()->toRoute('album', ['action' => 'add']);
//        }
//
//        // Retrieve the album with the specified id. Doing so raises
//        // an exception if the album is not found, which should result
//        // in redirecting to the landing page.
//        try {
//            $album = $this->table->getTicket($id);
//        } catch (\Exception $e) {
//            return $this->redirect()->toRoute('album', ['action' => 'index']);
//        }
//
//        $form = new TicketForm();
//        $form->bind($album);
//        $form->get('submit')->setAttribute('value', 'Edit');
//
//        $request = $this->getRequest();
//        $viewData = ['id' => $id, 'form' => $form];
//
//        if (!$request->isPost()) {
//            return $viewData;
//        }
//
//        $form->setInputFilter($album->getInputFilter());
//        $form->setData($request->getPost());
//
//        if (!$form->isValid()) {
//            return $viewData;
//        }
//
//        $this->table->saveTicket($album);
//
//        // Redirect to album list
//        return $this->redirect()->toRoute('album', ['action' => 'index']);
    }

    public function deleteAction() {
//        $id = (int) $this->params()->fromRoute('id', 0);
//        if (!$id) {
//            return $this->redirect()->toRoute('album');
//        }
//
//        $request = $this->getRequest();
//        if ($request->isPost()) {
//            $del = $request->getPost('del', 'No');
//
//            if ($del == 'Yes') {
//                $id = (int) $request->getPost('id');
//                $this->table->deleteTicket($id);
//            }
//
//            // Redirect to list of albums
//            return $this->redirect()->toRoute('album');
//        }
//
//        return [
//            'id' => $id,
//            'album' => $this->table->getTicket($id),
//        ];
    }

}
