<?php
namespace MatmomoReport\Response;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CommentListResponse implements IResponse
{
    /**
     * @var array $list
     */
    private $list = [];

    /**
     * @var bool $havNext
     */
    private $havNext;

    public function __construct(array $list,string $entityClass)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        foreach ($list as $item) {
            $json = json_encode($item);
            $entity =  $serializer->deserialize($json, $entityClass,'json');
            $this->list[] = $entity;
        }
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @param array $list
     */
    protected function setList(array $list)
    {
        $this->list = $list;
    }

    /**
     * @return mixed
     */
    public function havNext()
    {
        return $this->havNext;
    }

    /**
     * @param mixed $havNext
     */
    protected function setHavNext($havNext)
    {
        $this->havNext = $havNext;
    }


}