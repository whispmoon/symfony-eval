<?php

namespace AppBundle\Service;

use AppBundle\Entity\Publication;

/**
 * Class Notifier
 * @package AppBundle\Service
 */
class Notifier
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Constructor.
     *
     * @param \Swift_Mailer $mailer
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Notifies the administrator that a new publication has been submitted.
     *
     * @param Publication $publication
     */
    public function notify(Publication $publication)
    {
        // TODO
    }
}
