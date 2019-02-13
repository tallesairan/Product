            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('parent_id')
                    -> options(trans('product::category.options.parent_id'))
                    -> label(trans('product::category.label.parent_id'))
                    -> placeholder(trans('product::category.placeholder.parent_id'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('product::category.label.name'))
                       -> placeholder(trans('product::category.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('product::category.options.status'))
                    -> label(trans('product::category.label.status'))
                    -> placeholder(trans('product::category.placeholder.status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('meta_title')
                       -> label(trans('product::category.label.meta_title'))
                       -> placeholder(trans('product::category.placeholder.meta_title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('meta_description')
                    -> label(trans('product::category.label.meta_description'))
                    -> placeholder(trans('product::category.placeholder.meta_description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('meta_keyword')
                    -> label(trans('product::category.label.meta_keyword'))
                    -> placeholder(trans('product::category.placeholder.meta_keyword'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('product::category.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $category->files('image')
                            ->url($category->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $category->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order')
                       -> label(trans('product::category.label.order'))
                       -> placeholder(trans('product::category.placeholder.order'))!!}
                </div>
            </div>