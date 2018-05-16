<div class="container">

    <div class="row">
        <div class="col-md-3 col-left sidebar">
            <div class="block block-account">
                <div class="block-content">
                    <?php foreach ($filter as $agd): ?>
                        <ul>
                            <div><?= $agd['name'] ?></div>
                            <li>
                                <?php foreach ($agd['attrs'] as $ad): ?>
                                    <label class="container-label"><?= $ad['name'] ?>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-main">

            <!--            <div class="my-account">-->
            <!--                <div class="my-wishlist">-->
            <!--                    <div class="page-title title-buttons">-->
            <!--                        <h1>My Wishlist</h1>-->
            <!--                    </div>-->
            <!---->
            <!--                    <form id="wishlist-view-form"-->
            <!--                          action="https://www.organize.com/wishlist/index/update/wishlist_id/120/" method="post">-->
            <!--                        <fieldset>-->
            <!--                            <input name="form_key" type="hidden" value="P6FHIKJEz3vYphFm">-->
            <!--                            <table class="data-table" id="wishlist-table">-->
            <!--                                <thead>-->
            <!--                                <tr class="first last">-->
            <!--                                    <th></th>-->
            <!--                                    <th>Product Details and Comment</th>-->
            <!--                                    <th>Add to Cart</th>-->
            <!--                                    <th></th>-->
            <!--                                </tr>-->
            <!--                                </thead>-->
            <!--                                <tbody>-->
            <!--                                <tr id="item_1210" class="first odd">-->
            <!--                                    <td><a class="product-image"-->
            <!--                                           href="https://www.organize.com/vertical-file-sorter-blue.html"-->
            <!--                                           title="Honey-Can-Do OFC-04868 Mesh Vertical File Sorter, 3.6 x 12.6 x 11.5&quot;, Blue">-->
            <!--                                            <img src="https://www.organize.com/media/catalog/product/cache/1/small_image/113x113/9df78eab33525d08d6e5fb8d27136e95/O/F/OFC-04868_1_2.jpg"-->
            <!--                                                 width="113" height="113"-->
            <!--                                                 alt="Honey-Can-Do OFC-04868 Mesh Vertical File Sorter, 3.6 x 12.6 x 11.5&quot;, Blue">-->
            <!--                                        </a>-->
            <!--                                    </td>-->
            <!--                                    <td><h3 class="product-name"><a-->
            <!--                                                    href="https://www.organize.com/vertical-file-sorter-blue.html"-->
            <!--                                                    title="Honey-Can-Do OFC-04868 Mesh Vertical File Sorter, 3.6 x 12.6 x 11.5&quot;, Blue">Honey-Can-Do-->
            <!--                                                OFC-04868 Mesh Vertical File Sorter, 3.6 x 12.6 x 11.5", Blue</a></h3>-->
            <!--                                        <div class="description std">-->
            <!--                                            <div class="inner"></div>-->
            <!--                                        </div>-->
            <!--                                        <textarea name="description[1210]" rows="3" cols="5"-->
            <!--                                                  onfocus="focusComment(this)" onblur="focusComment(this)"-->
            <!--                                                  title="Comment">Please, enter your comments...</textarea>-->
            <!--                                    </td>-->
            <!--                                    <td>-->
            <!--                                        <div class="cart-cell">-->
            <!---->
            <!---->
            <!--                                            <div class="price-box">-->
            <!--                                                                <span class="regular-price" id="product-price-15787">-->
            <!--                                            <span class="price">$17.63</span>                                    </span>-->
            <!---->
            <!--                                            </div>-->
            <!---->
            <!--                                            <div class="add-to-cart-alt">-->
            <!--                                                <div class="qty-container">-->
            <!--                                                    <span class="qty-minus">-</span><input type="text"-->
            <!--                                                                                           class="input-text qty validate-not-negative-number"-->
            <!--                                                                                           name="qty[1210]"-->
            <!--                                                                                           value="1"><span-->
            <!--                                                            class="qty-plus">+</span>-->
            <!--                                                </div>-->
            <!--                                                <button type="button" title="Add to Cart"-->
            <!--                                                        onclick="addWItemToCart(1210);" class="button btn-cart">-->
            <!--                                                    <span><span>Add to Cart</span></span></button>-->
            <!--                                            </div>-->
            <!---->
            <!--                                        </div>-->
            <!--                                    </td>-->
            <!--                                    <td class="last"><a-->
            <!--                                                href="https://www.organize.com/wishlist/index/configure/id/1210/"-->
            <!--                                                class="btn-cart-edit">Edit</a>-->
            <!--                                        <a href="https://www.organize.com/wishlist/index/remove/item/1210/"-->
            <!--                                           onclick="return confirmRemoveWishlistItem();" title="Remove Item"-->
            <!--                                           class="btn-remove btn-remove2">Remove item</a>-->
            <!--                                    </td>-->
            <!--                                </tr>-->
            <!--                                <tr id="item_1211" class="last even">-->
            <!--                                    <td><a class="product-image"-->
            <!--                                           href="https://www.organize.com/3-tier-desk-organizer-blue.html"-->
            <!--                                           title="Honey-Can-Do OFC-04872 3-Tier Compartment Desk Organizer, 13.25&quot; x 10.75&quot; x 12.5&quot;, Blue">-->
            <!--                                            <img src="https://www.organize.com/media/catalog/product/cache/1/small_image/113x113/9df78eab33525d08d6e5fb8d27136e95/O/F/OFC-04872_1_2.jpg"-->
            <!--                                                 width="113" height="113"-->
            <!--                                                 alt="Honey-Can-Do OFC-04872 3-Tier Compartment Desk Organizer, 13.25&quot; x 10.75&quot; x 12.5&quot;, Blue">-->
            <!--                                        </a>-->
            <!--                                    </td>-->
            <!--                                    <td><h3 class="product-name"><a-->
            <!--                                                    href="https://www.organize.com/3-tier-desk-organizer-blue.html"-->
            <!--                                                    title="Honey-Can-Do OFC-04872 3-Tier Compartment Desk Organizer, 13.25&quot; x 10.75&quot; x 12.5&quot;, Blue">Honey-Can-Do-->
            <!--                                                OFC-04872 3-Tier Compartment Desk Organizer, 13.25" x 10.75" x 12.5",-->
            <!--                                                Blue</a></h3>-->
            <!--                                        <div class="description std">-->
            <!--                                            <div class="inner"></div>-->
            <!--                                        </div>-->
            <!--                                        <textarea name="description[1211]" rows="3" cols="5"-->
            <!--                                                  onfocus="focusComment(this)" onblur="focusComment(this)"-->
            <!--                                                  title="Comment">Please, enter your comments...</textarea>-->
            <!--                                    </td>-->
            <!--                                    <td>-->
            <!--                                        <div class="cart-cell">-->
            <!---->
            <!---->
            <!--                                            <div class="price-box">-->
            <!--                                                                <span class="regular-price" id="product-price-15788">-->
            <!--                                            <span class="price">$24.49</span>                                    </span>-->
            <!---->
            <!--                                            </div>-->
            <!---->
            <!--                                            <div class="add-to-cart-alt">-->
            <!--                                                <div class="qty-container">-->
            <!--                                                    <span class="qty-minus">-</span><input type="text"-->
            <!--                                                                                           class="input-text qty validate-not-negative-number"-->
            <!--                                                                                           name="qty[1211]"-->
            <!--                                                                                           value="1"><span-->
            <!--                                                            class="qty-plus">+</span>-->
            <!--                                                </div>-->
            <!--                                                <button type="button" title="Add to Cart"-->
            <!--                                                        onclick="addWItemToCart(1211);" class="button btn-cart">-->
            <!--                                                    <span><span>Add to Cart</span></span></button>-->
            <!--                                            </div>-->
            <!---->
            <!--                                        </div>-->
            <!--                                    </td>-->
            <!--                                    <td class="last"><a-->
            <!--                                                href="https://www.organize.com/wishlist/index/configure/id/1211/"-->
            <!--                                                class="btn-cart-edit">Edit</a>-->
            <!--                                        <a href="https://www.organize.com/wishlist/index/remove/item/1211/"-->
            <!--                                           onclick="return confirmRemoveWishlistItem();" title="Remove Item"-->
            <!--                                           class="btn-remove btn-remove2">Remove item</a>-->
            <!--                                    </td>-->
            <!--                                </tr>-->
            <!--                                </tbody>-->
            <!--                            </table>-->
            <!--                            <div class="buttons-set buttons-set2">-->
            <!---->
            <!--                                <button type="submit" name="save_and_share" title="Share Wishlist"-->
            <!--                                        class="button btn-share"><span><span>Share Wishlist</span></span></button>-->
            <!---->
            <!--                                <button type="button" title="Add All to Cart" onclick="addAllWItemsToCart()"-->
            <!--                                        class="button btn-add"><span><span>Add All to Cart</span></span></button>-->
            <!---->
            <!--                                <button type="submit" name="do" title="Update Wishlist" class="button btn-update"><span><span>Update Wishlist</span></span>-->
            <!--                                </button>-->
            <!--                            </div>-->
            <!--                        </fieldset>-->
            <!--                    </form>-->
            <!---->
            <!--                    <form id="wishlist-allcart-form" action="https://www.organize.com/wishlist/index/allcart/"-->
            <!--                          method="post">-->
            <!--                        <input name="form_key" type="hidden" value="P6FHIKJEz3vYphFm">-->
            <!--                        <div class="no-display">-->
            <!--                            <input type="hidden" name="wishlist_id" id="wishlist_id" value="120">-->
            <!--                            <input type="hidden" name="qty" id="qty" value="">-->
            <!--                        </div>-->
            <!--                    </form>-->
            <!--                </div>-->
            <!--                <div class="buttons-set">-->
            <!--                    <p class="back-link"><a href="https://www.organize.com/customer/account/">-->
            <!--                            <small>«</small>-->
            <!--                            Back</a></p>-->
            <!--                </div>-->
            <!--            </div>-->

        </div>
    </div>

</div>