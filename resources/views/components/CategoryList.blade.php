<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Products</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">This Pages</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="mt-5">
    <div class="container my-5">
        <div id="ProductByCategoryList" class="row">

        </div>
    </div>
</div>


<script>
    async function ByCategoryList(){
        let searchParams= new URLSearchParams(window.location.search);
        let id=searchParams.get('id');
        let res=await axios.get(`/ListProductByCategory/${id}`);
        $("#ProductByCategoryList").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem=`<div class="col-lg-3 col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="${item['image']}" alt="product_img2">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                            <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title">
                                        <a href="#">${item['title']}</a></h6>
                                    <div class="product_price">
                                        <span class="price">$ ${item['price']}</span>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="wPopularItemth:${item['star']}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            $("#ProductByCategoryList").append(EachItem);
        })
    }
</script>
