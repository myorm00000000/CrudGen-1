
    /**
     * Change Rank of {{ entity }} entity.
     *
{% if 'annotation' == format %}
     * @Route("/changerank", name="{{ route_name_prefix }}_changeRank")
     * @Method("post")
{% endif %}
     */
    public function changeRankAction()
    {
        $request = $this->getRequest();
        $data = $request->request->get('sortable');
        
        $em = $this->getDoctrine()->getEntityManager();
        foreach ($data as $rank => $id){
            if($id !== ''){
                $entity = $em->getRepository('{{ bundle }}:{{ entity }}')->find((int) $id);
                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find {{ entity }} entity.');
                }
                $entity->setRank((int) $rank);
                $em->persist($entity);
                $em->flush();
            }            
        }
        
        return new Response(1); 
    }