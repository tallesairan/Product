            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('product::attribute_group.label.name'))
                       -> placeholder(trans('product::attribute_group.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order')
                       -> label(trans('product::attribute_group.label.order'))
                       -> placeholder(trans('product::attribute_group.placeholder.order'))!!}
                </div>
            </div>