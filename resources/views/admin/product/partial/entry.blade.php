            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('manufacturer_id')
                    -> options(trans('product::product.options.manufacturer_id'))
                    -> label(trans('product::product.label.manufacturer_id'))
                    -> placeholder(trans('product::product.placeholder.manufacturer_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('category_id')
                    -> options(trans('product::product.options.category_id'))
                    -> label(trans('product::product.label.category_id'))
                    -> placeholder(trans('product::product.placeholder.category_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('model')
                       -> label(trans('product::product.label.model'))
                       -> placeholder(trans('product::product.placeholder.model'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('name')
                    -> label(trans('product::product.label.name'))
                    -> dataUpload(trans_url($product->getUploadURL('name')))
                    -> addClass('html-editor')
                    -> placeholder(trans('product::product.placeholder.name'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('price')
                       -> label(trans('product::product.label.price'))
                       -> placeholder(trans('product::product.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('quantity')
                       -> label(trans('product::product.label.quantity'))
                       -> placeholder(trans('product::product.placeholder.quantity'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('description')
                    -> label(trans('product::product.label.description'))
                    -> dataUpload(trans_url($product->getUploadURL('description')))
                    -> addClass('html-editor')
                    -> placeholder(trans('product::product.placeholder.description'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('return_policy')
                    -> label(trans('product::product.label.return_policy'))
                    -> placeholder(trans('product::product.placeholder.return_policy'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('meta_title')
                       -> label(trans('product::product.label.meta_title'))
                       -> placeholder(trans('product::product.placeholder.meta_title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('meta_description')
                    -> label(trans('product::product.label.meta_description'))
                    -> placeholder(trans('product::product.placeholder.meta_description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('meta_keyword')
                    -> label(trans('product::product.label.meta_keyword'))
                    -> placeholder(trans('product::product.placeholder.meta_keyword'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_checkboxes('featured[]')
                   -> checkboxes(trans('product::product.options.featured'))
                   -> label(trans('product::product.label.featured'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_checkboxes('premium[]')
                   -> checkboxes(trans('product::product.options.premium'))
                   -> label(trans('product::product.label.premium'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('product::product.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $product->files('image')
                            ->url($product->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $product->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('outofstock_status')
                   -> radios(trans('product::product.options.outofstock_status'))
                   -> label(trans('product::product.label.outofstock_status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order')
                       -> label(trans('product::product.label.order'))
                       -> placeholder(trans('product::product.placeholder.order'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('weight_class')
                    -> options(trans('product::product.options.weight_class'))
                    -> label(trans('product::product.label.weight_class'))
                    -> placeholder(trans('product::product.placeholder.weight_class'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('length_class')
                    -> options(trans('product::product.options.length_class'))
                    -> label(trans('product::product.label.length_class'))
                    -> placeholder(trans('product::product.placeholder.length_class'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='date_available' class='control-label'>{!!trans('product::product.label.date_available')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('date_available')
                        -> placeholder(trans('product::product.placeholder.date_available'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('product::product.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $product->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($product->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $product->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>