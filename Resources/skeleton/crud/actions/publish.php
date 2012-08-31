
    /**
     * Publish a {{ entity_class }} entity.
     *
{% if 'annotation' == format %}
     * @Route("/{id}/publish", name="{{ route_name_prefix }}_publish")
{% endif %}
     */
    public function publishAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('{{ bundle }}:{{ entity_class }}')->find($id);
    
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find {{ entity_class }} entity.');
        }
    
        if($entity->getOnline() == 1){
            $entity->setOnline(0);
    
            $em->persist($entity);
            $em->flush();
        }else{
            $entity->setOnline(1);

            $em->persist($entity);
            $em->flush();
        }
    
        return $this->redirect($this->getRequest()->headers->get('referer'));
    }