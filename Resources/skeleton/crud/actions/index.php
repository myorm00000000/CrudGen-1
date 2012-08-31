
    /**
     * Lists all {{ entity }} entities.
     *
{% if 'annotation' == format %}
     * @Route("/", name="{{ route_name_prefix }}")
     * @Template()
{% endif %}
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
{% if 'rank' in field_names %}    
        $entities = $em->getRepository('{{ bundle }}:{{ entity }}')->findBy(array(), array('rank' => 'ASC'));
{% else %}
        $entities = $em->getRepository('{{ bundle }}:{{ entity }}')->findAll();
{% endif %}

{% if 'annotation' == format %}
        return array('entities' => $entities);
{% else %}
        return $this->render('{{ bundle }}:{{ entity|replace({'\\': '/'}) }}:index.html.twig', array(
            'entities' => $entities
        ));
{% endif %}
    }
