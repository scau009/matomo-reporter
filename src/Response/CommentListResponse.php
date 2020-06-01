<?php
namespace MatomoReport\Response;

use MatomoReport\Request\BaseRequest;
use MatomoReport\Request\IRequest;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CommentListResponse implements IResponse
{
    /**
     * @var IRequest $request
     */
    protected $request;

    /**
     * @var array $list
     */
    public $list = [];

    /**
     * @var bool $havNext
     */
    public $havNext;


    public function __construct(BaseRequest $request, string $entityClass , array $fetchResult = [])
    {
        $this->request = $request;
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        foreach ($fetchResult as &$item) {
            $item = json_encode($item);
            $item = $serializer->deserialize($item, $entityClass, 'json');
        }
        $this->setList($fetchResult);
        $this->havNext = $request->getPageTotal() >= $this->request->getFilterLimit();
    }

    public function isHavNext()
    {
        return $this->havNext;
    }

    /**
     * @return IRequest
     */
    public function getRequest(): IRequest
    {
        return $this->request;
    }

    /**
     * @param IRequest $request
     */
    public function setRequest(IRequest $request)
    {
        $this->request = $request;
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
    public function setList(array $list)
    {
        $this->list = $list;
    }
}