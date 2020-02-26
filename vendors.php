<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AccesspressLite
 */

get_header(); 
global $post;
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id, 'accesspresslite_sidebar_layout', true );
?>

<link rel="stylesheet" href="http://thesocietyep.com/wp-content/themes/society/vendors.css">

<div class="localheader">
    <div class="ak-container">
        <h1>Local<br>Vendors</h1>
    </div>
</div>

<div class="ak-container">

    <div class="vendors-page-localnav">

        <div class="localnav-aside">
            <div class="vendors-page-actions-sort">
                <form>
                <selection id="sort">
                    <select id="vendors-type">
                        <option value="show-all">Show All</option>
                        <option value="bakery">Bakery</option>
                        <option value="bridal-boutiques">Bridal Boutiques</option>
                        <option value="dj">DJ</option>
                        <option value="florists">Florists</option>
                        <option value="hair-makeup">Hair & Makeup</option>
                        <option value="photobooths">Photobooths</option>
                        <option value="photographers">Photographers</option>
                        <option value="planners">Planners</option>
                        <option value="venues">Venues</option>
                        <option value="other-specialty">Other/Specialty</option>
                    </select>
                </selection>
                </form>
            </div>

            <div class="vendors-page-actions-grid-type">
                <button id="3-cols" class="active">
                    <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12 0h4v7h-4zm0 9h4v7h-4zM6 0h4v7H6zm0 9h4v7H6zM0 0h4v7H0zm0 9h4v7H0z" fill="#7E7E7E" fill-rule="evenodd"></path></svg>
                </button>
                <button id="2-cols">
                    <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M9 0h7v7H9zm0 9h7v7H9zM0 0h7v7H0zm0 9h7v7H0z" fill="#7E7E7E" fill-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div>
        <div class="cards-parent cols-3">
            <div class="card venues" id="onefifty-sunset">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Venues</p>
                    <h5 class="card-title">150 Sunset</h5>
                    <p class="card-text">150 Sunset is El Paso's premier Event Venue for weddings, quinceañeras, sweet 16s, corporate events. Breakfast & Lunch Kitchen, Landscaping & Nursery, and Outdoor Living Landscape Design & Construction Experts.</p>
                    <div class="card-links">
                        <a href="mailto:gabbir@150sunset.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9155850801" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://150sunset.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card venues" id="ardovinos">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Venues</p>
                    <h5 class="card-title">Ardovinos</h5>
                    <p class="card-text">We are a destination – an experience – where you can dine in our restaurant, relax on our patios, celebrate a momentous occasion or shop at our Farmers’ Market. All it takes is one visit; and, as you watch the evening passenger train wind its way around Mount Cristo Rey you'll understand why you'll want to keep coming back.</p>
                    <div class="card-links">
                        <a href="mailto:marina@ardovinos.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="mailto:peggy@ardovinos.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:5755890653" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.ardovinos.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="arte-de-papel">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Arte De Papel</h5>
                    <p class="card-text">We the make the best and most beautiful invitations for your events, you can always count on us for truly unique event invitations.</p>
                    <div class="card-links">
                        <a href="mailto:margarita@arteenpapel.mx" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </div>
                    <a href="http://www.arteenpapel.mx/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card bridal-boutiques" id="bridal-novias">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Bridal Boutiques</p>
                    <h5 class="card-title">Bridal Novias</h5>
                    <p class="card-text">Premier Bridal Boutique of the Southwest. Best collection of wedding dresses, bridesmaid gowns and mother of the bride gowns.</p>
                    <div class="card-links">
                        <a href="mailto:epadamson@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9157751910" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//bridalnoviasboutique.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="bright-nights-ep">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Bright Nights EP</h5>
                    <p class="card-text">Go with the glow! Custom neon and rentals serving El Paso and the Las Cruces area.</p>
                    <div class="card-links">
                        <a href="mailto:erikalicon2589@yahoo.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </div>
                    <a href="https://www.instagram.com/brightnights915/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card bakery" id="chantilly">
                <div class="card-image"></div>
                <!--<img class="card-img-top" src="http://chantillycakesep.com/images/uploads/slides/slide1.jpg" alt="Card image cap">-->
                <div class="card-body">
                    <p class="vendor-type-tag">Bakery</p>
                    <h5 class="card-title">Chantilly</h5>
                    <p class="card-text">We create beautiful wedding or birthday cakes in El Paso.</p>
                    <div class="card-links">
                        <a href="mailto:laura@weddingcakeselpaso.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9155024500" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//www.weddingcakeselpaso.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="child-at-heart-lettering">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Child at Heart Lettering</h5>
                    <p class="card-text">I am a stay-at-home mom and lettering artist who loves to share fun DIY and craft ideas as well as how to create a simple and beautiful home you want on a small budget.</p>
                    <div class="card-links">
                        <a href="mailto:deonnawade@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </div>
                    <a href="https://www.facebook.com/pg/thechildatheartblog/posts/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card venues" id="coronado-country-club">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Venues</p>
                    <h5 class="card-title">Coronado Country Club</h5>
                    <p class="card-text">Coronado Country Club is a scenic course that offers panoramic views of Mexico, New Mexico, and Texas to the southeast. This course resembles the desert tracks of Arizona and features plush fairways and greens that are considered some of the fastest in the nation.</p>
                    <div class="card-links">
                        <a href="mailto:catering@coronadocountryclub.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9155841171" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.coronadocountryclub.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card florists" id="debbies-bloomers">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Florists</p>
                    <h5 class="card-title">Debbie's Bloomers</h5>
                    <p class="card-text">Brilliant bouquets, lush centerpieces and custom designed floral structures are all part of what makes a Debbie’s Bloomers event unique. We work with each of our clients to create unique designs based on their inspiration photos and ideas.</p>
                    <div class="card-links">
                        <a href="mailto:debbies_bloomers@msn.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9158578600" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//www.debbiesbloomers.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card hair-makeup" id="dry-bar">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Hair & Makeup</p>
                    <h5 class="card-title">Dry Bar</h5>
                    <p class="card-text">A unique beauty experience in El Paso, Texas specializing in blowouts, updos, and makeovers.</p>
                    <div class="card-links">
                        <a href="mailto:nikita@dryelpaso.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9152199702" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                        <a href="tel:9152469222" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.dryblowdrybar.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card bridal-boutiques" id="ella-blu">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Bridal Boutiques</p>
                    <h5 class="card-title">Ella Blu</h5>
                    <p class="card-text">Premier Bridal Boutique of the Southwest. Best collection of wedding dresses, bridesmaid gowns and mother of the bride gowns.</p>
                    <div class="card-links">
                        <a href="mailto:sophiapadamson@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9158819999" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//ellablubridal.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card bakery" id="elite-cakes">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Bakery</p>
                    <h5 class="card-title">Elite Cakes</h5>
                    <p class="card-text">Delivering exceptional, delicious cakes for all occassions and events!</p>
                    <div class="card-links">
                        <a href="mailto:elite_eventsep@hotmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9158750936" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//www.facebook.com/eliteeventsdesigners" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card venues" id="el-paso-country-club">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Venues</p>
                    <h5 class="card-title">El Paso Country Club</h5>
                    <p class="card-text">El Paso Country Club is an original that only gets better with time, perfect for your next event.</p>
                    <div class="card-links">
                        <a href="mailto:yvette@elpasocountryclub.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9155841111" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.elpasocountryclub.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card hair-makeup" id="elysa-simons">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Hair & Makeup</p>
                    <h5 class="card-title">Elyse Simons</h5>
                    <p class="card-text">Elyse Simons Beauty provides on location makeup services including bridal makeup, beauty consultation, light hairstyling, airbrush makeup and more.</p>
                    <div class="card-links">
                        <a href="mailto:nikita@dryelpaso.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:6103600501" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.elysesimons.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card photobooths" id="funboxx-photo-booth">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Photobooths</p>
                    <h5 class="card-title">Funboxx Photo Booth</h5>
                    <p class="card-text">We offer best quality photo booth rentals with many options to our clients in El Paso, Las Cruces, and surrounding areas.</p>
                    <div class="card-links">
                        <a href="mailto:desertshot.funboxx@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="mailto:mkt.desertshot@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9152407632" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="http://www.funboxx.net/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card dj" id="ncdj">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">DJ</p>
                    <h5 class="card-title">NCDJ</h5>
                    <p class="card-text">NC DJ Productions transforms your social event into a memorable and magical one.</p>
                    <div class="card-links">
                        <a href="mailto:ncdjproductions@me.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9154081285" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="//www.ncdjproductions.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card hair-makeup" id="jinny-riddle">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Hair & Makeup</p>
                    <h5 class="card-title">Jinny Riddle</h5>
                    <p class="card-text">Jinny Riddle Make Up Studio is a full service salon in El Paso, Texas. Jinny also provides hair and makeup services for bridal, sweet sixteen, quinceaneras and other events.</p>
                    <div class="card-links">
                        <a href="mailto:jinnyriddle@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9158200333" class="card-link"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></a>
                    </div>
                    <a href="https://jinnyriddle.com/index.html" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card photographers" id="life-in-tandom">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Photographers</p>
                    <h5 class="card-title">Life In Tandom</h5>
                    <p class="card-text">A wedding photographer duo specializing in wedding, engagement, and portrait photography in El Paso, Texas.</p>
                    <div class="card-links">
                        <a href="mailto:hello@lifeintandemphotography.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </div>
                    <a href="http://lifeintandemphotography.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card photobooths" id="mr-photobooth">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Photobooths</p>
                    <h5 class="card-title">MR Photobooth</h5>
                    <p class="card-text">Choose a booth and let's party! Fully customized to match your style capturing the fun on your special day.</p>
                    <div class="card-links">
                        <a href="mailto:justin@mrpbep.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9152277380" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.mrphotoboothep.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="sip-away">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Sip Away</h5>
                    <p class="card-text">A bar on wheels rolling the party to you! Sparkling sodas or custom cocktails, the menu is what you choose. We cater any event and all ages, the catch, you still buy the booze. We hope to add joy to your party, we know its unique, just for you!</p>
                    <div class="card-links">
                        <a href="mailto:sipawayep@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9152356767" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://sipawayep.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card photographers" id="stephane-lemaire">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Photographers</p>
                    <h5 class="card-title">Stephane Lemaire</h5>
                    <p class="card-text">Stephane Lemaire offers wedding, engagement, bridal photography in El Paso Texas and Las Cruces.</p>
                    <div class="card-links">
                        <a href="mailto:stephane-lemaire@hotmail.fr" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9153564139" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://stephanelemaire.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="sweet-fancy">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Sweet & Fancy</h5>
                    <p class="card-text">Our Goal is to make and create your event to be the best experience for you and your guests. With a stress free & a singular touch of originality.</p>
                    <div class="card-links">
                        <a href="mailto:issamagi33@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9156675232" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.facebook.com/nanaganser/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="table-occasions">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">Table Occasions</h5>
                    <p class="card-text">Table Occasions started out of pure passion for making our personal events unforgettable. Our goal at Table Occasions is to incite our client’s creative spirit, translate your vision into a one of a kind event that gives your guest an unforgettable experience.</p>
                    <div class="card-links">
                        <a href="mailto:victoriacarbonell78@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9158454800" class="card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://www.facebook.com/tableoccasionsep/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card other-specialty" id="the-city-magazine">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Other/Specialty</p>
                    <h5 class="card-title">The City Magazine</h5>
                    <p class="card-text">The City Magazine is El Paso's only monthly Lifestyle magazine full of edgy reads and trendy photography!</p>
                    <div class="card-links">
                        <a href="mailto:josh@thecitymagazineelp.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9155005730" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="https://thecitymagazineelp.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card planners" id="three-sisters">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Planners</p>
                    <h5 class="card-title">Three Sisters</h5>
                    <p class="card-text">Three Sisters El Paso is a wedding and event planning agency in El Paso, Texas. El Paso and Las Cruces' only boutique wedding and event designer, wedding and other events planner.</p>
                    <div class="card-links">
                        <a href="mailto:info@threesistersep.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                        <a href="tel:9152586258" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        </a>
                    </div>
                    <a href="http://www.threesistersep.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
            <div class="card photographers" id="veronica-cook">
                <div class="card-image"></div>
                <div class="card-body">
                    <p class="vendor-type-tag">Photographers</p>
                    <h5 class="card-title">Veronica Cook</h5>
                    <p class="card-text">All packages include a custom, personalized portrait experience as well as 1-2 hours of shooting and an online gallery where you can access your photos.</p>
                    <div class="card-links">
                        <a href="mailto:cook.veronica8@gmail.com" class="card-link">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </div>
                    <a href="https://www.instagram.com/veronica.cook.photography" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#3-cols, #2-cols').click(function () {
            if (this.id == '3-cols') { // if 3 cols button is clicked
                    $('#3-cols').addClass("active");
                    $('#2-cols').removeClass("active");
                    $('.cards-parent').addClass("cols-3");
                    $('.cards-parent').removeClass("cols-2");
            }
            else if (this.id == '2-cols') { // if 2 cols button is clicked
                    $('#2-cols').addClass("active");
                    $('#3-cols').removeClass("active");
                    $('.cards-parent').addClass("cols-2");
                    $('.cards-parent').removeClass("cols-3");
            }
        });
    </script>

    <script>

        $("#vendors-type").change(function() {
            var value = $("#vendors-type option:selected" ).val();

            if(value == "show-all") 
            {
                $(".bakery").fadeIn(300);
                $(".bridal-boutiques").fadeIn(300);
                $(".dj").fadeIn(300);
                $(".florists").fadeIn(300);
                $(".hair-makeup").fadeIn(300);
                $(".photobooths").fadeIn(300);
                $(".photographers").fadeIn(300);
                $(".planners").fadeIn(300);
                $(".venues").fadeIn(300);
                $(".other-specialty").fadeIn(300);
            }             
            else if(value == "bakery")
            {
                $(".bakery").fadeIn(300);
                $(".bridal-boutiques").hide();
                $(".dj").hide();
                $(".florists").hide();
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "bridal-boutiques")
            {
                $(".bridal-boutiques").fadeIn(300);
                $(".bakery").hide();
                $(".dj").hide();
                $(".florists").hide();
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "dj")
            {
                $(".dj").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "florists")
            { 
                $(".florists").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide(); 
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "hair-makeup") 
            {
                $(".hair-makeup").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide();
                $(".photobooths").hide(); 
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if (value == "photobooths")
            {
                $(".photobooths").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photographers").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if (value == "photographers")
            {
                $(".photographers").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".planners").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "planners")
            {
                $(".planners").fadeIn(300);
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".venues").hide();
                $(".other-specialty").hide();
            }
            else if(value == "venues")
            {
                $(".venues").fadeIn(300);
                $(".planners").hide();
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".other-specialty").hide();
            }
            else if(value == "other-specialty")
            {
                $(".other-specialty").fadeIn(300);
                $(".planners").hide();
                $(".bakery").hide();
                $(".bridal-boutiques").hide();
                $(".dj").hide(); 
                $(".florists").hide(); 
                $(".hair-makeup").hide();
                $(".photobooths").hide();
                $(".photographers").hide();
                $(".venues").hide();
            }

        });
    
    </script>
</div>
<?php get_footer(); ?>
