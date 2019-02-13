            @include('product::public.attribute.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.attribute.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($attribute->defaultImage('images' , 'xl'))!!}" alt="{{$attribute->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('product::attribute.label.id') !!}
                </label><br />
                    {!! $attribute['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('product::attribute.label.slug') !!}
                </label><br />
                    {!! $attribute['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="group_id">
                    {!! trans('product::attribute.label.group_id') !!}
                </label><br />
                    {!! $attribute['group_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('product::attribute.label.name') !!}
                </label><br />
                    {!! $attribute['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="order">
                    {!! trans('product::attribute.label.order') !!}
                </label><br />
                    {!! $attribute['order'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('product::attribute.label.created_at') !!}
                </label><br />
                    {!! $attribute['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('product::attribute.label.updated_at') !!}
                </label><br />
                    {!! $attribute['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('product::attribute.label.deleted_at') !!}
                </label><br />
                    {!! $attribute['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



