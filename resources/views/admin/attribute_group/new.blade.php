<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('product::attribute_group.names') !!} [{!! trans('product::attribute_group.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#product-attribute_group-entry' data-href='{!!guard_url('product/attribute_group/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>