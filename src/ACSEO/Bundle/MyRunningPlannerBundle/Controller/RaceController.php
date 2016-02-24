<?php

namespace ACSEO\Bundle\MyRunningPlannerBundle\Controller;

use Dunglas\ApiBundle\Controller\ResourceController;
use Dunglas\ApiBundle\Event\DataEvent;
use Dunglas\ApiBundle\Event\Events;
use Symfony\Component\HttpFoundation\Request;

class RaceController extends ResourceController
{
    /**
     * {@inheritdoc}
     */
    public function getAction(Request $request, $id)
    {
        $resource = $this->addSerializeGroupToResource($this->getResource($request));

        $object = $this->findOrThrowNotFound($resource, $id);

        $this->get('event_dispatcher')->dispatch(Events::RETRIEVE, new DataEvent($resource, $object));

        return $this->getSuccessResponse($resource, $object);
    }

    public function getNextRaceAction(Request $request, $date)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();

        $resource = $this->addSerializeGroupToResource($this->getResource($request));

        $object = $this->getDoctrine()->getManager()->getRepository('ACSEOMyRunningPlannerBundle:Race')->getNextRace($date, $user);

        $this->get('event_dispatcher')->dispatch(Events::RETRIEVE, new DataEvent($resource, $object));

        return $this->getSuccessResponse($resource, $object);
    }

    protected function addSerializeGroupToResource($resource)
    {
        $entityClass = explode('\\', $resource->getEntityClass());
        $entityName = strtolower(end($entityClass));

        $serializeGroups = $this->get('request')->get('serialize', $entityName.'_read');
        $resource->initNormalizationContext(array('groups' => array('0' => $serializeGroups)));

        return $resource;
    }
}
