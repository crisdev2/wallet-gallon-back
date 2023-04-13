<?php
namespace App\Manager;

use App\Entity\Form;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class FormManager 
{
  private $doctrine;
  private $entityManager;

  public function __construct(
    ManagerRegistry $doctrine,
    EntityManagerInterface $entityManager,
  )
  {
    $this->doctrine = $doctrine;
    $this->entityManager = $entityManager;
  }

  public function save($data, $id = null)
  {
    if ($id) {
      /** @var Form $record */
      $record = $this->doctrine
        ->getRepository(Form::class)
        ->find($id);
    } else {
      $record = new Form();
    }
    $record->setAccion($data['accion']);
    $record->setValorAnterior($data['valorAnterior']);
    $record->setValorNuevo($data['valorNuevo']);
    $record->setCreated(new \DateTime());

    $this->entityManager->persist($record);
    $this->entityManager->flush();

    return $record;
  }
}