    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#attribute" data-toggle="tab">{!! trans('product::attribute.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#product-attribute-edit'  data-load-to='#product-attribute-entry' data-datatable='#product-attribute-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#product-attribute-entry' data-href='{{guard_url('product/attribute')}}/{{$attribute->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-attribute-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('product/attribute/'. $attribute->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="attribute">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('product::attribute.name') !!} [{!!$attribute->name!!}] </div>
                @include('product::admin.attribute.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>