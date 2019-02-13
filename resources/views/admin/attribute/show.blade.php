    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('product::attribute.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#product-attribute-entry' data-href='{{guard_url('product/attribute/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($attribute->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#product-attribute-entry' data-href='{{ guard_url('product/attribute') }}/{{$attribute->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#product-attribute-entry' data-datatable='#product-attribute-list' data-href='{{ guard_url('product/attribute') }}/{{$attribute->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-attribute-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('product/attribute'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('product::attribute.name') !!}  [{!! $attribute->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('product::admin.attribute.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>