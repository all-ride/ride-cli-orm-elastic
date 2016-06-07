<?php

namespace ride\cli\command\orm;

use ride\application\orm\elastic\ElasticMapper;

use ride\cli\command\AbstractCommand;

/**
 * Command to create or update the Elastic mapping
 */
class OrmElasticDefineCommand extends AbstractCommand {

    /**
     * Initializes the command
     * @return null
     */
    protected function initialize() {
        $this->setDescription('Maps the ORM models to the needed indices in Elastic search');
    }

    /**
     * Executes the command
     * @param ride\application\orm\elastic\ElasticMapper $mapper
     * @return null
     */
    public function invoke(ElasticMapper $mapper) {
        $mapper->defineIndices();
    }

}
