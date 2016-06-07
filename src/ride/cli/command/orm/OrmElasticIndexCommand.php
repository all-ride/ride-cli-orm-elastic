<?php

namespace ride\cli\command\orm;

use ride\application\orm\elastic\ElasticIndexer;

use ride\cli\command\AbstractCommand;

use ride\library\orm\OrmManager;

/**
 * Command to insert the current entries in a new index
 */
class OrmElasticIndexCommand extends AbstractCommand {

    /**
     * Initializes the command
     * @return null
     */
    protected function initialize() {
        $this->setDescription('Indexes the existing ORM entries into Elastic');

        $this->addArgument('model', 'Name of the model to index', false);
    }

    /**
     * Executes the command
     * @param ride\application\orm\elastic\ElasticMapper $mapper
     * @return null
     */
    public function invoke(OrmManager $orm, ElasticIndexer $indexer, $model = null) {
        if ($model) {
            $model = $orm->getModel($model);

            $indexer->indexModel($model);
        } else {
            $models = $orm->getModels();

            $indexer->indexModels($models);
        }
    }

}
