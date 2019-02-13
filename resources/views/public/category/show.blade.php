            @include('product::public.category.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.category.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($category->defaultImage('images' , 'xl'))!!}" alt="{{$category->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('product::category.label.id') !!}
                </label><br />
                    {!! $category['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('product::category.label.user_id') !!}
                </label><br />
                    {!! $category['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="parent_id">
                    {!! trans('product::category.label.parent_id') !!}
                </label><br />
                    {!! $category['parent_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('product::category.label.name') !!}
                </label><br />
                    {!! $category['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('product::category.label.slug') !!}
                </label><br />
                    {!! $category['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('product::category.label.status') !!}
                </label><br />
                    {!! $category['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_title">
                    {!! trans('product::category.label.meta_title') !!}
                </label><br />
                    {!! $category['meta_title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_description">
                    {!! trans('product::category.label.meta_description') !!}
                </label><br />
                    {!! $category['meta_description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_keyword">
                    {!! trans('product::category.label.meta_keyword') !!}
                </label><br />
                    {!! $category['meta_keyword'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('product::category.label.image') !!}
                </label><br />
                    {!! $category['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="order">
                    {!! trans('product::category.label.order') !!}
                </label><br />
                    {!! $category['order'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('product::category.label.upload_folder') !!}
                </label><br />
                    {!! $category['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('product::category.label.created_at') !!}
                </label><br />
                    {!! $category['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('product::category.label.updated_at') !!}
                </label><br />
                    {!! $category['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('product::category.label.deleted_at') !!}
                </label><br />
                    {!! $category['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



