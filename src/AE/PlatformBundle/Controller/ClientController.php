<?php

namespace AE\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClientController extends Controller
{
    /**
     * @Route("/{page}", name="ae_platform_home", defaults={"page"= 1}, requirements={"page"= "\d*"})
     */
    public function indexAction($page)
    {
        // ...

        // Notre liste d'annonce en dur
        $listAdverts = array(
          array(
            'title'   => 'Recherche un client',
            'id'      => 1,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un client',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Recherche une catégorie',
            'id'      => 2,
            'author'  => 'Hugo',
            'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Recherche un responsable',
            'id'      => 3,
            'author'  => 'Mathieu',
            'content' => 'Nous proposons un responsable',
            'date'    => new \Datetime())
        );

        // Et modifiez le 2nd argument pour injecter notre liste
        return $this->render('AEPlatformBundle:Client:index.html.twig', array(
          'listClients' => array()
        ));
    }
    
    
    public function menuAction($limit)
    {
        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !
        $listClients = array(
          array('id' => 2, 'nom' => 'SOW', 'prenom' => 'Ibrahima Sory'),
          array('id' => 5, 'nom' => 'BARRY', 'prenom' => 'Mamadou Saliou'),
          array('id' => 9, 'nom' => 'CAMARA', 'prenom' => '')
        );

        return $this->render('AEPlatformBundle:Client:menu.html.twig', array(
          // Tout l'intérêt est ici : le contrôleur passe
          // les variables nécessaires au template !
          'listClients' => $listClients
        ));
    }
    
    /**
     * @Route("/client/{id}", name="ae_platform_view", requirements={ "id" = "\d+"})
     */
    public function viewAction($id)
  {
    // Ici, on récupérera l'annonce correspondante à l'id $id

    return $this->render('AEPlatformBundle:Client:view.html.twig', array(
      'id' => $id
    ));
  }

  public function addAction(Request $request)
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cettte annonce
      return $this->redirectToRoute('ae_platform_view', array('id' => 5));
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('AEPlatformBundle:Client:add.html.twig');
  }

  public function editAction($id, Request $request)
  {
    // Ici, on récupérera l'annonce correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Client bien modifiée.');

      return $this->redirectToRoute('ae_platform_view', array('id' => 5));
    }

    return $this->render('AEPlatformBundle:Client:edit.html.twig');
  }

  public function deleteAction($id)
  {
    // Ici, on récupérera l'annonce correspondant à $id

    // Ici, on gérera la suppression de l'annonce en question

    return $this->render('AEPlatformBundle:Client:delete.html.twig');
  }
}
