            @include('product::public.product.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.product.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($product->defaultImage('images' , 'xl'))!!}" alt="{{$product->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('product::product.label.id') !!}
                </label><br />
                    {!! $product['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('product::product.label.user_id') !!}
                </label><br />
                    {!! $product['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="manufacturer_id">
                    {!! trans('product::product.label.manufacturer_id') !!}
                </label><br />
                    {!! $product['manufacturer_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="category_id">
                    {!! trans('product::product.label.category_id') !!}
                </label><br />
                    {!! $product['category_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('product::product.label.slug') !!}
                </label><br />
                    {!! $product['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="model">
                    {!! trans('product::product.label.model') !!}
                </label><br />
                    {!! $product['model'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('product::product.label.name') !!}
                </label><br />
                    {!! $product['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="price">
                    {!! trans('product::product.label.price') !!}
                </label><br />
                    {!! $product['price'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="quantity">
                    {!! trans('product::product.label.quantity') !!}
                </label><br />
                    {!! $product['quantity'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('product::product.label.status') !!}
                </label><br />
                    {!! $product['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('product::product.label.description') !!}
                </label><br />
                    {!! $product['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="return_policy">
                    {!! trans('product::product.label.return_policy') !!}
                </label><br />
                    {!! $product['return_policy'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_title">
                    {!! trans('product::product.label.meta_title') !!}
                </label><br />
                    {!! $product['meta_title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_description">
                    {!! trans('product::product.label.meta_description') !!}
                </label><br />
                    {!! $product['meta_description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="meta_keyword">
                    {!! trans('product::product.label.meta_keyword') !!}
                </label><br />
                    {!! $product['meta_keyword'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="featured">
                    {!! trans('product::product.label.featured') !!}
                </label><br />
                    {!! $product['featured'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="premium">
                    {!! trans('product::product.label.premium') !!}
                </label><br />
                    {!! $product['premium'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('product::product.label.image') !!}
                </label><br />
                    {!! $product['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="outofstock_status">
                    {!! trans('product::product.label.outofstock_status') !!}
                </label><br />
                    {!! $product['outofstock_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="order">
                    {!! trans('product::product.label.order') !!}
                </label><br />
                    {!! $product['order'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="weight_class">
                    {!! trans('product::product.label.weight_class') !!}
                </label><br />
                    {!! $product['weight_class'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="length_class">
                    {!! trans('product::product.label.length_class') !!}
                </label><br />
                    {!! $product['length_class'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="date_available">
                    {!! trans('product::product.label.date_available') !!}
                </label><br />
                    {!! $product['date_available'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="images">
                    {!! trans('product::product.label.images') !!}
                </label><br />
                    {!! $product['images'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('product::product.label.created_at') !!}
                </label><br />
                    {!! $product['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('product::product.label.updated_at') !!}
                </label><br />
                    {!! $product['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('product::product.label.deleted_at') !!}
                </label><br />
                    {!! $product['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



