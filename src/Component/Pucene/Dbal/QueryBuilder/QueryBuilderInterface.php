<?php

namespace Pucene\Component\Pucene\Dbal\QueryBuilder;

use Doctrine\DBAL\Query\Expression\ExpressionBuilder;
use Pucene\Component\Math\MathExpressionBuilder;

interface QueryBuilderInterface
{
    /**
     * @param ExpressionBuilder $expr
     * @param ParameterBag $parameter
     *
     * @return mixed
     */
    public function build(ExpressionBuilder $expr, ParameterBag $parameter);

    public function scoring(MathExpressionBuilder $expr, ScoringQueryBuilder $queryBuilder);

    /**
     * @return QueryBuilderInterface[]
     */
    public function getTerms();
}
