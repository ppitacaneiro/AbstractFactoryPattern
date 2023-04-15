<?php
class TechnicalSheet {

    private $modelFactory;

    public function __construct(ModelFactory $modelFactory) {
        $this->modelFactory = $modelFactory;
    }

    public function getTechnicalSheet(string $model) {
        $model = $this->modelFactory->create($model);

        $format = 'Model: %s \n Processor: %s \n Cores: %d \n';

        return sprintf(
            $format,
            $model->getModel(),
            $model->getProccesor(),
            $model->getCores(),
        );
    }

}

?>