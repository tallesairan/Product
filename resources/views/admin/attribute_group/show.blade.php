    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('product::attribute_group.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#product-attribute_group-entry' data-href='{{guard_url('product/attribute_group/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($attribute_group->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#product-attribute_group-entry' data-href='{{ guard_url('product/attribute_group') }}/{{$attribute_group->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#product-attribute_group-entry' data-datatable='#product-attribute_group-list' data-href='{{ guard_url('product/attribute_group') }}/{{$attribute_group->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-attribute_group-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('product/attribute_group'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('product::attribute_group.name') !!}  [{!! $attribute_group->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('product::admin.attribute_group.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>