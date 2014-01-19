<?php
return array(
    'HcbBlog-Controller-Posts-List' => array(
        'parameters' => array(
            'paginatorDataFetchService' => 'HcbBlog\Service\Posts\FetchQbBuilderService',
            'viewModel' => 'HcbBlog-Posts-PaginatorViewModel'
        )
    ),


    'HcbBlog-Controller-Posts-Post-Create' => array(
        'parameters' => array(
            'serviceCommand' => 'HcbBlog\Service\Posts\CreateService',
            'jsonResponseModelFactory' => 'Zf2Libs\View\Model\Json\Specific\StatusMessageDataModelFactory'
        )
    ),

    'HcbBlog-Controller-Posts-Delete' => array(
        'parameters' => array(
            'inputData' => 'HcbBlog-Posts-Collection',
            'serviceCommand' => 'HcbBlog\Service\Posts\DeleteService',
            'jsonResponseModelFactory' => 'Zf2Libs\View\Model\Json\Specific\StatusMessageDataModelFactory'
        )
    ),

    'HcbBlog-Controller-Posts-Post-Data-Save' => array(
        'parameters' => array(
            'inputData' => 'HcbBlog\Data\Posts\Post\Data\Save',
            'fetchService' => 'HcbBlog-Posts-Post-Data-FetchService',
            'serviceCommand' => 'HcbBlog\Service\Posts\Post\Data\SaveCommand',
            'jsonResponseModelFactory' => 'Zf2Libs\View\Model\Uploader\Specific\StatusMessageDataModelFactory'
        )
    ),

    'HcbBlog-Controller-Posts-Post-Data-Create' => array(
        'parameters' => array(
            'inputData' => 'HcbBlog\Data\Posts\Post\Data\Save',
            'fetchService' => 'HcbBlog-Posts-Post-FetchService',
            'serviceCommand' => 'HcbBlog\Service\Posts\Post\Data\CreateCommand',
            'jsonResponseModelFactory' => 'Zf2Libs\View\Model\Uploader\Specific\StatusMessageDataModelFactory'
        )
    ),

    'HcbBlog-Controller-Posts-Post-Data-List' => array(
        'parameters' => array(
            'fetchService' => 'HcbBlog-Posts-Post-FetchService',
            'paginatorDataFetchService' => 'HcbBlog\Service\Posts\Post\FetchQbBuilderService',
            'viewModel' => 'HcbBlog-Posts-Post-Data-PaginatorViewModel'
        )
    )
);