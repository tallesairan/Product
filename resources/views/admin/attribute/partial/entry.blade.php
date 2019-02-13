            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('group_id')
                    -> options(trans('product::attribute.options.group_id'))
                    -> label(trans('product::attribute.label.group_id'))
                    -> placeholder(trans('product::attribute.placeholder.group_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('product::attribute.label.name'))
                       -> placeholder(trans('product::attribute.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order')
                       -> label(trans('product::attribute.label.order'))
                       -> placeholder(trans('product::attribute.placeholder.order'))!!}
                </div>
            </div>