<?php

namespace gitDeployment;

/*
    1. Sjekke om repository fra payload eksisterer i $repositories array
        1. Ja: Sette $repository lik repository i $repositories array
        2. Nei: Avslutt.
    2. Identifisere type git request
        1. Pullrequest merge: Se at destination branch er korrekt
        2. Commit: Se om branch er korrekt
 */

class Deployment
{
    private $payload;
    private $repository;
    private $payloadType;

    public function __construct($payload)
    {
        $this->payload = $payload;
        $this->getPayloadType();
    }

    private function getPayloadType()
    {
        if (isset($this->payload['pullrequest_merged'])) {

            $this->payloadType = 'pullrequest_merge';

        } elseif (isset($this->payload['commits'])) {

            $this->payloadType = 'commit';

        } else {

            $this->payloadType = 'unknown';

        }
    }

    public function isPayloadSet()
    {
        if (isset($this->payloadType)) {
            return true;
        }

        return false;
    }

    public function deploy()
    {
        if ($this->payloadType === 'pullrequest_merge') {
            ;
        } elseif ($this->payloadType === 'commit') {

            $searchValue = array_search(
                $this->payload['repository']['name'],
                Config::get('repositories')
            );

            if ($searchValue !== false) {

                $this->repository = $searchValue;

                echo $searchValue;

            } else {
                echo "false\n";
            }

            var_dump($searchValue);
        }
    }
}


// if ((isset($payload['pullrequest_merged']) && $payload['pullrequest_merged']['destination']['branch']['name'] === 'master')
//     || (isset($payload['commits']) && $payload['commits'][0]['branch'] === 'master') ) {
//     exec('/usr/bin/git reset --hard HEAD 2>&1', $outputReset);
//     exec('/usr/bin/git pull 2>&1', $output, $echoed);
//     logToFile(getPayloadType($payload) . ' --- ' . $echoed);
// }
