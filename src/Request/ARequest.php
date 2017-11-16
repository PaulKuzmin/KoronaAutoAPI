<?php
namespace KoronaAuto\Request;
/**
 * Абстрактный запрос к API
 */
abstract class ARequest {    
    abstract protected function getMethod();

    private $apiUid;
    private $dataType;
    private $endpoint;
    
    /**
     * Конструктор
     * @param string $apiUid Уникальный идентификатор API-клиента. Выдается менеджером по запросу. Привязан к IP клиента.
     */
    public function __construct($apiUid) {
        $this->apiUid = $apiUid;
        $this->dataType = 'json';
        $this->endpoint = 'https://korona-auto.com/api/';
    }
    
    /**
     * Выполнить запрос
     * @param array $params Набор параметров
     * @return array
     * @throws \Exception
     */
    protected function execute(array $params) {
        $query_params = http_build_query(array_merge($params, ['apiUid' => $this->apiUid], ['dataType' => $this->dataType]));
        $jsondata = file_get_contents($this->endpoint.$this->getMethod().'?'.$query_params);
        $data = json_decode($jsondata, true);

        if (isset($data['error'])) {
            throw new \Exception($data['error']);
        }
        
        return $data;
    }
}
