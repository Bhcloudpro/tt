<?php

namespace Message\ArticleDecorators;

use Message\ArticleInterface;

class ArticleAddDecorator implements ArticleInterface
{
    public function __construct(
        private ArticleInterface $article
    ) {
        $this->article = $article;
    }

    public function getMessage(): string
    {
        return $this->article->getMessage().' added.';
    }
}
