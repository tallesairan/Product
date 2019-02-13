    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#attribute_group" data-toggle="tab">{!! trans('product::attribute_group.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#product-attribute_group-edit'  data-load-to='#product-attribute_group-entry' data-datatable='#product-attribute_group-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#product-attribute_group-entry' data-href='{{guard_url('product/attribute_group')}}/{{$attribute_group->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-attribute_group-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('product/attribute_group/'. $attribute_group->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="attribute_group">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('product::attribute_group.name') !!} [{!!$attribute_group->name!!}] </div>
                @include('product::admin.attribute_group.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>