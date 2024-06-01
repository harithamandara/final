<x-shop-layout>

  <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Products</h4>
                <h2>Choose the best product for you!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row">

@foreach ($products as $product)


            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                <img src="{{ asset('uploads/product/' . $product->image) }}" all="">
                </div>
                <div class="down-content">
                  <span> {{$product->price}}</span>
                  <a><h4>{{$product->name}}</h4></a>
                  <p> {{$product->description}}</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="{{ url('more/' . $product->id) }}">View Product</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            @endforeach


          </div>
        </div>
      </div>
    </section>


</x-shop-layout>
