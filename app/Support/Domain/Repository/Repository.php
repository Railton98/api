<?php

namespace Confee\Support\Domain\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Repository.
 */
abstract class Repository
{
  protected $modelClass;

  public function newQuery()
  {
    return app()->make($this->modelClass)->newQuery();
  }

  /**
   * @return Builder
   */
  public function factory(array $data = null)
  {
    $model = $this->newQuery()->getModel()->newInstance();

    $this->fillModel($model, $data);

    return $model;
  }

  protected function fillModel(Model $model, $data)
  {
    $model->fill($data);
  }

}
