<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proposal
 */

?>

<footer class="footer-section">
     <div class="top_footer">
        <div class="container">
            <div class="row row_top_footer">
                <div class="col-md-6">
                    <div class="wrap_footer_text">
                        <div class="wrap_email_phone d-flex">
                            <div class="wrap_footer_email">
                                <span>E-mail:</span>
                                <a href="mailto:head@proposal007.com">head@proposal007.com</a>
                            </div>
                            <div class="wrap_footer_phone">
                              <span>Phone:</span>
                              <a href="tel:+13479269458">+1(347)926-9458</a>
                          </div>
                        </div>
                        <div class="wrap_f_text">
                            <p>Proposal 007 offers a unique proposal planning and photography service based in New York City. Founded by ‘secret proposal’ photographer Vlad Leto, our company guarantees the best images of your marriage proposal. Vlad became the focus of major media coverage in 2014, when The New York Times published an article on him and his secret proposal photography services.</p>
                            <p>Vlad has since been featured on a number of major media outlets around the world, Business Insider, NBC News, Cosmopolitan, Daily Mail, and Euro News, to name a few. In 2015, Vlad  and Tatiana launched a proposal company, Proposal 007, as a new platform that offers secret proposal photography and engagement planning services.</p>
                        </div>
                    </div>
  
                </div>
                <div class="col-md-6">
                    <div class="wrap_footer_contact">
                        <h5>Contact Form:</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrap_contact_field">
                                        <input type="text" name="name" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="wrap_contact_field">
                                      <input type="email" name="email" placeholder="E-mail" />
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="wrap_contact_field">
                                      <textarea name="msg" placeholder="Message"></textarea>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="wrap_contact_field">
                                     <button type="submit">Send</button>
                                  </div>
                                </div>
  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div class="bottom_footer">
         <div class="container">
             <div class="row row_bottom_footer align-items-center">
                 <div class="col-md-5">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu_id'        => 'primary-menu',
								'menu_class'=> 'menu_footer'
							)
						);
					?>
                 </div>
                 <div class="col-md-3">
                     <div class="wrap_footer_logo">
                         <a href="index.html">
                            <svg width="167" height="35" viewBox="0 0 167 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3438 0.366845C12.9762 0.366845 14.2089 0.70108 15.0418 1.36955C15.8913 2.02172 16.3161 2.91844 16.3161 4.05974C16.3161 5.33146 15.9163 6.47275 15.1167 7.48361C14.3338 8.49447 13.2261 9.28522 11.7935 9.85587C10.361 10.4265 8.72855 10.7118 6.89622 10.7118H6.14663L4.97227 15.065C4.93896 15.1792 4.88899 15.3748 4.82236 15.652C4.75573 15.9129 4.72241 16.1248 4.72241 16.2879C4.72241 16.5976 4.84734 16.8177 5.09721 16.9482C5.34707 17.0786 5.79682 17.152 6.44647 17.1683L6.34652 17.6574C5.58028 17.6085 4.54751 17.584 3.24822 17.584C1.78236 17.584 0.699616 17.6085 0 17.6574L0.0999452 17.1683C0.699616 17.1357 1.14937 17.0705 1.44921 16.9726C1.74904 16.8748 1.98225 16.6873 2.14882 16.4101C2.33206 16.133 2.50696 15.6846 2.67353 15.065L5.97173 2.93475C6.12164 2.3478 6.1966 1.9565 6.1966 1.76085C6.1966 1.43477 6.07167 1.20651 5.82181 1.07607C5.57195 0.929337 5.13052 0.847817 4.49753 0.831513L4.62247 0.342388C5.28877 0.3913 6.31321 0.415757 7.69578 0.415757C8.49534 0.415757 9.09501 0.407604 9.49479 0.3913L11.3438 0.366845ZM7.14608 10.2227C9.47814 10.2227 11.1689 9.62761 12.2183 8.4374C13.2677 7.2472 13.7924 5.65754 13.7924 3.66844C13.7924 2.70649 13.5426 1.99726 13.0429 1.54074C12.5431 1.06792 11.7352 0.831513 10.6192 0.831513C10.1195 0.831513 9.728 0.89673 9.44482 1.02716C9.16164 1.14129 8.92844 1.34509 8.74521 1.63857C8.57863 1.93204 8.42038 2.3641 8.27047 2.93475L6.29655 10.2227H7.14608Z" fill="white"/>
                                <path d="M29.3306 14.6982H29.9053L29.8053 15.0161C29.5055 16.0433 29.1224 16.8014 28.656 17.2906C28.2062 17.7634 27.5982 17.9998 26.832 17.9998C26.0491 17.9998 25.4661 17.7715 25.0829 17.315C24.6998 16.8585 24.5332 16.3042 24.5832 15.652L24.7831 12.9129C24.7998 12.7172 24.8081 12.4564 24.8081 12.1303C24.8081 11.4455 24.6831 10.9156 24.4333 10.5406C24.1834 10.1656 23.7253 9.89663 23.059 9.73358C22.4094 9.55424 21.4599 9.45641 20.2106 9.44011L18.6864 15.065C18.5365 15.5542 18.4616 15.9536 18.4616 16.2634C18.4616 16.5895 18.5782 16.8177 18.8114 16.9482C19.0612 17.0786 19.511 17.152 20.1606 17.1683L20.0607 17.6574C19.2944 17.6085 18.2617 17.584 16.9624 17.584C15.4965 17.584 14.4138 17.6085 13.7142 17.6574L13.8141 17.1683C14.4138 17.1357 14.8635 17.0705 15.1634 16.9726C15.4632 16.8748 15.6964 16.6873 15.863 16.4101C16.0462 16.133 16.2211 15.6846 16.3877 15.065L19.6859 2.93475C19.8358 2.38041 19.9108 1.99726 19.9108 1.78531C19.9108 1.44292 19.7858 1.20651 19.536 1.07607C19.2861 0.929337 18.8447 0.847817 18.2117 0.831513L18.3366 0.342388C19.0029 0.3913 20.0274 0.415757 21.4099 0.415757C22.2095 0.415757 22.8092 0.407604 23.209 0.3913L25.0579 0.366845C26.6904 0.366845 27.923 0.676624 28.7559 1.29618C29.6054 1.89944 30.0302 2.7391 30.0302 3.81517C30.0302 5.15211 29.4389 6.30971 28.2562 7.28796C27.0735 8.26621 25.491 8.91838 23.5088 9.24446C23.7253 9.26076 24.0168 9.30152 24.3833 9.36674C25.3661 9.54609 26.0741 9.83141 26.5072 10.2227C26.9402 10.614 27.1568 11.2417 27.1568 12.1058C27.1568 12.3178 27.1485 12.4808 27.1318 12.595L26.9319 15.0895C26.9153 15.2036 26.9069 15.3748 26.9069 15.6031C26.9069 16.5976 27.1734 17.0949 27.7065 17.0949C27.9897 17.0949 28.2479 16.9319 28.4811 16.6058C28.7143 16.2634 28.9558 15.7417 29.2057 15.0406L29.3306 14.6982ZM20.3605 8.95098H21.1101C23.3589 8.95098 24.983 8.47001 25.9824 7.50807C26.9985 6.54612 27.5066 5.26624 27.5066 3.66844C27.5066 2.70649 27.2567 1.99726 26.757 1.54074C26.2573 1.06792 25.4494 0.831513 24.3333 0.831513C23.8336 0.831513 23.4422 0.89673 23.159 1.02716C22.8758 1.14129 22.6426 1.34509 22.4594 1.63857C22.2928 1.93204 22.1345 2.3641 21.9846 2.93475L20.3605 8.95098Z" fill="white"/>
                                <path d="M31.481 12.1303C31.481 10.2879 31.9224 8.4211 32.8053 6.52982C33.6881 4.63853 34.9208 3.08149 36.5032 1.85867C38.1024 0.619558 39.9014 0 41.9003 0C43.7659 0 45.2151 0.51358 46.2479 1.54074C47.2807 2.56791 47.797 4.01898 47.797 5.89395C47.797 7.73632 47.3473 9.60315 46.4478 11.4944C45.5649 13.3694 44.3239 14.9265 42.7248 16.1656C41.1257 17.3884 39.335 17.9998 37.3528 17.9998C35.5038 17.9998 34.0629 17.4862 33.0301 16.4591C31.9974 15.4319 31.481 13.989 31.481 12.1303ZM41.6754 0.440212C40.4261 0.440212 39.2101 1.02716 38.0274 2.20106C36.8614 3.37496 35.9202 4.8994 35.2039 6.77438C34.4877 8.63305 34.1295 10.5243 34.1295 12.4482C34.1295 14.0297 34.446 15.277 35.079 16.19C35.712 17.1031 36.5449 17.5596 37.5776 17.5596C38.827 17.5596 40.0346 16.9726 41.2007 15.7987C42.3833 14.6248 43.3328 13.1085 44.0491 11.2499C44.7654 9.37489 45.1235 7.47546 45.1235 5.55157C45.1235 3.97006 44.807 2.7228 44.174 1.80976C43.541 0.896729 42.7082 0.440212 41.6754 0.440212Z" fill="white"/>
                                <path d="M57.8544 0.366845C59.4869 0.366845 60.7195 0.70108 61.5524 1.36955C62.4019 2.02172 62.8267 2.91844 62.8267 4.05974C62.8267 5.33146 62.4269 6.47275 61.6273 7.48361C60.8444 8.49447 59.7367 9.28522 58.3042 9.85587C56.8716 10.4265 55.2392 10.7118 53.4069 10.7118H52.6573L51.4829 15.065C51.4496 15.1792 51.3996 15.3748 51.333 15.652C51.2664 15.9129 51.233 16.1248 51.233 16.2879C51.233 16.5976 51.358 16.8177 51.6078 16.9482C51.8577 17.0786 52.3075 17.152 52.9571 17.1683L52.8572 17.6574C52.0909 17.6085 51.0581 17.584 49.7589 17.584C48.293 17.584 47.2103 17.6085 46.5106 17.6574L46.6106 17.1683C47.2103 17.1357 47.66 17.0705 47.9598 16.9726C48.2597 16.8748 48.4929 16.6873 48.6595 16.4101C48.8427 16.133 49.0176 15.6846 49.1842 15.065L52.4824 2.93475C52.6323 2.3478 52.7072 1.9565 52.7072 1.76085C52.7072 1.43477 52.5823 1.20651 52.3324 1.07607C52.0826 0.929337 51.6412 0.847817 51.0082 0.831513L51.1331 0.342388C51.7994 0.3913 52.8238 0.415757 54.2064 0.415757C55.006 0.415757 55.6056 0.407604 56.0054 0.3913L57.8544 0.366845ZM53.6567 10.2227C55.9888 10.2227 57.6795 9.62761 58.7289 8.4374C59.7784 7.2472 60.3031 5.65754 60.3031 3.66844C60.3031 2.70649 60.0532 1.99726 59.5535 1.54074C59.0538 1.06792 58.2459 0.831513 57.1298 0.831513C56.6301 0.831513 56.2386 0.89673 55.9555 1.02716C55.6723 1.14129 55.4391 1.34509 55.2558 1.63857C55.0893 1.93204 54.931 2.3641 54.7811 2.93475L52.8072 10.2227H53.6567Z" fill="white"/>
                                <path d="M62.3986 12.1303C62.3986 10.2879 62.84 8.4211 63.7229 6.52982C64.6057 4.63853 65.8384 3.08149 67.4208 1.85867C69.02 0.619558 70.819 0 72.8179 0C74.6835 0 76.1327 0.51358 77.1655 1.54074C78.1983 2.56791 78.7147 4.01898 78.7147 5.89395C78.7147 7.73632 78.2649 9.60315 77.3654 11.4944C76.4825 13.3694 75.2416 14.9265 73.6424 16.1656C72.0433 17.3884 70.2526 17.9998 68.2704 17.9998C66.4214 17.9998 64.9805 17.4862 63.9478 16.4591C62.915 15.4319 62.3986 13.989 62.3986 12.1303ZM72.593 0.440212C71.3437 0.440212 70.1277 1.02716 68.945 2.20106C67.779 3.37496 66.8378 4.8994 66.1216 6.77438C65.4053 8.63305 65.0472 10.5243 65.0472 12.4482C65.0472 14.0297 65.3636 15.277 65.9966 16.19C66.6296 17.1031 67.4625 17.5596 68.4953 17.5596C69.7446 17.5596 70.9522 16.9726 72.1183 15.7987C73.301 14.6248 74.2504 13.1085 74.9667 11.2499C75.683 9.37489 76.0411 7.47546 76.0411 5.55157C76.0411 3.97006 75.7246 2.7228 75.0916 1.80976C74.4587 0.896729 73.6258 0.440212 72.593 0.440212Z" fill="white"/>
                                <path d="M92.6449 0.171194C92.0452 1.65487 91.5538 3.3179 91.1707 5.16027H90.671C90.7709 4.68745 90.8209 4.22278 90.8209 3.76626C90.8209 2.80432 90.5294 2.01356 89.9464 1.39401C89.3634 0.774448 88.4722 0.464669 87.2729 0.464669C86.2234 0.464669 85.3739 0.725536 84.7243 1.24727C84.0913 1.769 83.7748 2.54345 83.7748 3.57061C83.7748 4.36952 84.0246 5.1032 84.5244 5.77167C85.0407 6.44014 85.807 7.2309 86.8231 8.14393C87.5394 8.77979 88.1141 9.33413 88.5472 9.80695C88.9803 10.2798 89.3467 10.8015 89.6466 11.3722C89.9464 11.9428 90.0963 12.5542 90.0963 13.2064C90.0963 14.2661 89.7798 15.1629 89.1468 15.8966C88.5305 16.6139 87.7393 17.1438 86.7731 17.4862C85.807 17.8286 84.8075 17.9998 83.7748 17.9998C82.8919 17.9998 82.184 17.8938 81.6509 17.6819C81.1346 17.4699 80.6598 17.2009 80.2267 16.8748C79.9102 16.6302 79.6104 16.508 79.3272 16.508C79.1273 16.508 78.9607 16.6058 78.8275 16.8014C78.6942 16.9971 78.5193 17.3395 78.3028 17.8286H77.803C78.0696 17.209 78.3278 16.4672 78.5776 15.6031C78.8441 14.7227 79.1523 13.508 79.5021 11.9591H80.0018C79.8519 12.7254 79.777 13.3287 79.777 13.7689C79.777 14.9591 80.1101 15.8803 80.7764 16.5324C81.4427 17.1846 82.4672 17.5107 83.8497 17.5107C84.9824 17.5107 85.8736 17.258 86.5233 16.7525C87.1896 16.2471 87.5227 15.4808 87.5227 14.4536C87.5227 13.8341 87.3978 13.2634 87.1479 12.7417C86.8981 12.22 86.5899 11.7635 86.2234 11.3722C85.8736 10.9645 85.3822 10.4591 84.7492 9.85587C84.0829 9.23631 83.5499 8.70642 83.1501 8.26621C82.767 7.826 82.4339 7.31242 82.1507 6.72547C81.8842 6.13852 81.7509 5.48635 81.7509 4.76897C81.7509 3.75811 82.0091 2.89399 82.5255 2.17661C83.0585 1.45922 83.7415 0.921185 84.5743 0.562493C85.4239 0.187498 86.3151 0 87.2479 0C87.9308 0 88.5222 0.081521 89.0219 0.244563C89.5216 0.407605 90.013 0.668472 90.4961 1.02716C90.8959 1.32064 91.1707 1.46737 91.3206 1.46737C91.4539 1.46737 91.5788 1.36955 91.6954 1.1739C91.8287 0.961946 91.9786 0.627711 92.1452 0.171194H92.6449Z" fill="white"/>
                                <path d="M103.511 15.6031C103.561 16.1411 103.702 16.5324 103.936 16.777C104.169 17.0215 104.435 17.152 104.735 17.1683L104.635 17.6574C103.969 17.6085 103.061 17.584 101.912 17.584C100.562 17.584 99.563 17.6085 98.9134 17.6574L99.0133 17.1683C99.5797 17.1357 100.013 17.0705 100.313 16.9726C100.629 16.8585 100.854 16.6629 100.987 16.3857C101.12 16.0922 101.179 15.6683 101.162 15.114L100.937 11.1031H94.7906L92.9166 13.6955C92.1337 14.7716 91.7423 15.5786 91.7423 16.1167C91.7423 16.7851 92.3586 17.1357 93.5913 17.1683L93.4663 17.6574C92.5502 17.6085 91.6007 17.584 90.6179 17.584C89.9016 17.584 89.277 17.6085 88.7439 17.6574L88.8689 17.1683C89.6351 17.0052 90.468 16.296 91.3675 15.0406L102.137 0.220106H102.511L103.511 15.6031ZM100.912 10.614L100.487 3.20377L95.1404 10.614H100.912Z" fill="white"/>
                                <path d="M119 12.5216C118.883 12.8314 118.675 13.4998 118.375 14.527C118.109 15.44 117.884 16.4835 117.701 17.6574C116.568 17.6085 114.661 17.584 111.979 17.584C108.781 17.584 106.374 17.6085 104.758 17.6574L104.883 17.1683C105.482 17.1357 105.924 17.0705 106.207 16.9726C106.507 16.8748 106.748 16.6873 106.932 16.4101C107.115 16.133 107.29 15.6846 107.456 15.065L110.78 2.93475C110.929 2.41302 111.004 2.01356 111.004 1.73639C111.004 1.39401 110.879 1.16575 110.63 1.05162C110.396 0.93749 109.963 0.864121 109.33 0.831513L109.455 0.342388C110.155 0.3913 111.221 0.415757 112.653 0.415757C114.003 0.415757 115.06 0.3913 115.827 0.342388L115.702 0.831513C115.085 0.864121 114.627 0.929338 114.328 1.02716C114.044 1.12499 113.811 1.31249 113.628 1.58966C113.445 1.86683 113.27 2.31519 113.103 2.93475L109.78 15.065C109.63 15.5705 109.555 15.9699 109.555 16.2634C109.555 16.6058 109.68 16.834 109.93 16.9482C110.18 17.046 110.621 17.0949 111.254 17.0949H113.078C114.111 17.0949 114.936 16.9563 115.552 16.6792C116.185 16.3857 116.71 15.921 117.126 15.2852C117.542 14.6493 117.976 13.7281 118.425 12.5216H119Z" fill="white"/>
                                <path d="M138.057 11.5159C138.057 13.9384 137.547 15.7913 136.526 17.0747C135.505 18.3581 134.01 18.9998 132.041 18.9998C130.097 18.9998 128.61 18.3701 127.581 17.1108C126.551 15.8514 126.025 14.0466 126 11.6964V8.47184C126 6.02534 126.515 4.16841 127.544 2.90105C128.581 1.63368 130.072 1 132.016 1C133.961 1 135.447 1.62967 136.477 2.88902C137.506 4.14034 138.033 5.94112 138.057 8.29136V11.5159ZM134.516 7.97853C134.516 6.52668 134.312 5.47187 133.903 4.81413C133.503 4.14836 132.874 3.81548 132.016 3.81548C131.183 3.81548 130.566 4.13232 130.166 4.766C129.774 5.39166 129.566 6.37427 129.541 7.71383V11.9731C129.541 13.4009 129.737 14.4637 130.129 15.1616C130.53 15.8514 131.167 16.1964 132.041 16.1964C132.907 16.1964 133.532 15.8635 133.916 15.1977C134.3 14.5319 134.5 13.5132 134.516 12.1416V7.97853Z" fill="white"/>
                                <path d="M152.467 11.5159C152.467 13.9384 151.957 15.7913 150.936 17.0747C149.915 18.3581 148.42 18.9998 146.451 18.9998C144.507 18.9998 143.02 18.3701 141.991 17.1108C140.961 15.8514 140.435 14.0466 140.41 11.6964V8.47184C140.41 6.02534 140.925 4.16841 141.954 2.90105C142.991 1.63368 144.482 1 146.426 1C148.371 1 149.857 1.62967 150.887 2.88902C151.916 4.14034 152.443 5.94112 152.467 8.29136V11.5159ZM148.926 7.97853C148.926 6.52668 148.722 5.47187 148.314 4.81413C147.913 4.14836 147.284 3.81548 146.426 3.81548C145.593 3.81548 144.976 4.13232 144.576 4.766C144.184 5.39166 143.976 6.37427 143.951 7.71383V11.9731C143.951 13.4009 144.147 14.4637 144.539 15.1616C144.94 15.8514 145.577 16.1964 146.451 16.1964C147.317 16.1964 147.942 15.8635 148.326 15.1977C148.71 14.5319 148.91 13.5132 148.926 12.1416V7.97853Z" fill="white"/>
                                <path d="M167 3.18981L160.101 18.7592H156.364L163.275 4.05612H154.403V1.24064H167V3.18981Z" fill="white"/>
                                <path d="M6.15945 24.4545C6.11115 23.9687 5.89666 23.5824 5.51598 23.2955C5.1353 23.0085 4.65661 22.8651 4.0799 22.8651C3.67365 22.8651 3.3157 22.9347 3.00604 23.0739C2.69922 23.2131 2.45774 23.4062 2.28161 23.6534C2.10831 23.8977 2.02166 24.1761 2.02166 24.4886C2.02166 24.7188 2.07138 24.9205 2.17081 25.0938C2.27024 25.267 2.40376 25.4162 2.57138 25.5412C2.74183 25.6634 2.92933 25.7685 3.13388 25.8565C3.34126 25.9446 3.55007 26.0185 3.7603 26.0781L4.68075 26.3423C4.95916 26.419 5.23757 26.517 5.51598 26.6364C5.79439 26.7557 6.04865 26.9062 6.27876 27.0881C6.51172 27.267 6.6978 27.4872 6.837 27.7486C6.97905 28.0071 7.05007 28.3182 7.05007 28.6818C7.05007 29.1477 6.92933 29.5668 6.68786 29.9389C6.44638 30.3111 6.09979 30.6065 5.64808 30.8253C5.19638 31.0412 4.65518 31.1491 4.0245 31.1491C3.43075 31.1491 2.91513 31.0511 2.47763 30.8551C2.04013 30.6562 1.69638 30.3821 1.44638 30.0327C1.19638 29.6832 1.05575 29.2784 1.0245 28.8182H1.84268C1.87109 29.1619 1.98473 29.4531 2.18359 29.6918C2.38246 29.9304 2.64098 30.1122 2.95916 30.2372C3.27734 30.3594 3.63246 30.4205 4.0245 30.4205C4.45916 30.4205 4.84553 30.348 5.18359 30.2031C5.5245 30.0554 5.79155 29.8509 5.98473 29.5895C6.18075 29.3253 6.27876 29.0185 6.27876 28.669C6.27876 28.3736 6.20206 28.1264 6.04865 27.9276C5.89524 27.7259 5.68075 27.5568 5.40518 27.4205C5.13246 27.2841 4.8157 27.1634 4.4549 27.0582L3.41087 26.7514C2.72621 26.5469 2.19496 26.2642 1.81712 25.9034C1.43928 25.5426 1.25036 25.0824 1.25036 24.5227C1.25036 24.054 1.37536 23.642 1.62536 23.2869C1.8782 22.929 2.21911 22.6506 2.64808 22.4517C3.0799 22.25 3.56428 22.1491 4.10121 22.1491C4.64382 22.1491 5.12393 22.2486 5.54155 22.4474C5.95916 22.6463 6.29013 22.9205 6.53445 23.2699C6.78161 23.6165 6.91371 24.0114 6.93075 24.4545H6.15945ZM8.81854 31V24.4545H9.58132V31H8.81854ZM9.20632 23.3295C9.05007 23.3295 8.91655 23.277 8.80575 23.1719C8.69496 23.0639 8.63956 22.9347 8.63956 22.7841C8.63956 22.6335 8.69496 22.5057 8.80575 22.4006C8.91655 22.2926 9.05007 22.2386 9.20632 22.2386C9.36257 22.2386 9.49609 22.2926 9.60689 22.4006C9.71768 22.5057 9.77308 22.6335 9.77308 22.7841C9.77308 22.9347 9.71768 23.0639 9.60689 23.1719C9.49609 23.277 9.36257 23.3295 9.20632 23.3295ZM12.3459 26.9091V31H11.5874V24.4545H12.3246V25.4815H12.3928C12.5462 25.1463 12.7848 24.8778 13.1087 24.6761C13.4354 24.4716 13.8388 24.3693 14.3189 24.3693C14.7592 24.3693 15.1456 24.4616 15.478 24.6463C15.8132 24.8281 16.0732 25.0966 16.2578 25.4517C16.4453 25.8068 16.5391 26.2429 16.5391 26.7599V31H15.7805V26.8068C15.7805 26.2699 15.63 25.8452 15.3288 25.5327C15.0305 25.2202 14.63 25.0639 14.1271 25.0639C13.7834 25.0639 13.478 25.1378 13.2109 25.2855C12.9439 25.4332 12.7322 25.6463 12.576 25.9247C12.4226 26.2003 12.3459 26.5284 12.3459 26.9091ZM21.0934 31.1364C20.5082 31.1364 19.9982 30.9901 19.5636 30.6974C19.1317 30.4048 18.7965 30.0043 18.5579 29.4957C18.3192 28.9872 18.1999 28.4077 18.1999 27.7571C18.1999 27.1009 18.3207 26.517 18.5621 26.0057C18.8065 25.4943 19.1445 25.0937 19.5763 24.804C20.0082 24.5114 20.5096 24.3651 21.0806 24.3651C21.5181 24.3651 21.9144 24.4503 22.2695 24.6207C22.6246 24.7884 22.9173 25.0256 23.1474 25.3324C23.3803 25.6364 23.5266 25.9915 23.5863 26.3977H22.8192C22.7397 26.0284 22.5479 25.7131 22.244 25.4517C21.9428 25.1875 21.5593 25.0554 21.0934 25.0554C20.6758 25.0554 20.3065 25.169 19.9854 25.3963C19.6644 25.6207 19.413 25.9347 19.2312 26.3381C19.0522 26.7386 18.9627 27.2031 18.9627 27.7315C18.9627 28.2628 19.0508 28.733 19.2269 29.142C19.4031 29.5483 19.6502 29.8665 19.9684 30.0966C20.2894 30.3267 20.6644 30.4418 21.0934 30.4418C21.3832 30.4418 21.6474 30.3878 21.886 30.2798C22.1275 30.169 22.3292 30.0128 22.4911 29.8111C22.6559 29.6094 22.7667 29.3693 22.8235 29.0909H23.5906C23.5337 29.4858 23.3931 29.8381 23.1687 30.1477C22.9471 30.4545 22.6587 30.696 22.3036 30.8722C21.9513 31.0483 21.5479 31.1364 21.0934 31.1364ZM27.8626 31.1364C27.2518 31.1364 26.7234 30.9943 26.2773 30.7102C25.8313 30.4233 25.4862 30.027 25.2418 29.5213C25.0004 29.0128 24.8796 28.4276 24.8796 27.7656C24.8796 27.1065 25.0004 26.5213 25.2418 26.0099C25.4862 25.4957 25.8228 25.0937 26.2518 24.804C26.6836 24.5114 27.1822 24.3651 27.7475 24.3651C28.1026 24.3651 28.445 24.4304 28.7745 24.5611C29.104 24.6889 29.3995 24.8864 29.6609 25.1534C29.9251 25.4176 30.1339 25.7514 30.2873 26.1548C30.4407 26.5554 30.5174 27.0298 30.5174 27.5781V27.9531H25.4038V27.2841H29.7418C29.7418 26.8636 29.6566 26.4858 29.4862 26.1506C29.3185 25.8125 29.0842 25.5455 28.783 25.3494C28.4847 25.1534 28.1396 25.0554 27.7475 25.0554C27.3327 25.0554 26.9677 25.1662 26.6523 25.3878C26.337 25.6094 26.0898 25.902 25.9109 26.2656C25.7347 26.6293 25.6452 27.027 25.6424 27.4588V27.8594C25.6424 28.3793 25.7319 28.8338 25.9109 29.223C26.0927 29.6094 26.3498 29.9091 26.6822 30.1222C27.0146 30.3352 27.408 30.4418 27.8626 30.4418C28.1722 30.4418 28.4435 30.3935 28.6765 30.2969C28.9123 30.2003 29.1097 30.071 29.2688 29.9091C29.4308 29.7443 29.5529 29.5639 29.6353 29.3679L30.3555 29.6023C30.256 29.8778 30.0927 30.1321 29.8654 30.3651C29.641 30.598 29.3597 30.7855 29.0217 30.9276C28.6864 31.0668 28.3001 31.1364 27.8626 31.1364ZM35.5341 31V30.4162L38.3849 27.2116C38.7571 26.7912 39.0568 26.4318 39.2841 26.1335C39.5114 25.8352 39.6761 25.5597 39.7784 25.3068C39.8835 25.054 39.9361 24.7912 39.9361 24.5185C39.9361 24.1861 39.858 23.8963 39.7017 23.6491C39.5483 23.3991 39.3366 23.2045 39.0668 23.0653C38.7969 22.9261 38.4929 22.8565 38.1548 22.8565C37.7969 22.8565 37.483 22.9332 37.2131 23.0866C36.946 23.2401 36.7386 23.4503 36.5909 23.7173C36.4432 23.9844 36.3693 24.2912 36.3693 24.6378H35.6065C35.6065 24.1548 35.7173 23.7273 35.9389 23.3551C36.1634 22.9801 36.4688 22.6861 36.8551 22.473C37.2443 22.2599 37.6847 22.1534 38.1761 22.1534C38.6619 22.1534 39.0938 22.2585 39.4716 22.4688C39.8494 22.6761 40.1463 22.9588 40.3622 23.3168C40.5781 23.6747 40.6861 24.0753 40.6861 24.5185C40.6861 24.8395 40.6293 25.1506 40.5156 25.4517C40.4048 25.7528 40.2131 26.0881 39.9403 26.4574C39.6676 26.8267 39.2898 27.2784 38.8068 27.8125L36.642 30.2287V30.2841H40.9588V31H35.5341ZM45.5685 31.1193C44.9549 31.1193 44.4308 30.9432 43.9961 30.5909C43.5643 30.2358 43.2319 29.723 42.9989 29.0526C42.7688 28.3821 42.6538 27.5767 42.6538 26.6364C42.6538 25.6989 42.7688 24.8963 42.9989 24.2287C43.2319 23.5582 43.5657 23.0455 44.0004 22.6903C44.4379 22.3324 44.9606 22.1534 45.5685 22.1534C46.1765 22.1534 46.6978 22.3324 47.1325 22.6903C47.57 23.0455 47.9038 23.5582 48.1339 24.2287C48.3668 24.8963 48.4833 25.6989 48.4833 26.6364C48.4833 27.5767 48.3668 28.3821 48.1339 29.0526C47.9038 29.723 47.5714 30.2358 47.1367 30.5909C46.7049 30.9432 46.1822 31.1193 45.5685 31.1193ZM45.5685 30.4034C46.2418 30.4034 46.7674 30.0753 47.1452 29.419C47.5231 28.7599 47.712 27.8324 47.712 26.6364C47.712 25.8409 47.6254 25.1619 47.4521 24.5994C47.2816 24.0341 47.0359 23.6023 46.7148 23.304C46.3967 23.0057 46.0146 22.8565 45.5685 22.8565C44.9009 22.8565 44.3768 23.1889 43.9961 23.8537C43.6154 24.5156 43.4251 25.4432 43.4251 26.6364C43.4251 27.4318 43.5103 28.1108 43.6808 28.6733C43.854 29.2358 44.0998 29.6648 44.418 29.9602C44.739 30.2557 45.1225 30.4034 45.5685 30.4034ZM52.9109 22.2727V31H52.114V23.108H52.0629L50.0174 24.4673V23.6406L52.0799 22.2727H52.9109ZM58.114 31.1193C57.6282 31.1193 57.1935 31.0213 56.81 30.8253C56.4293 30.6264 56.1254 30.3537 55.8981 30.0071C55.6737 29.6605 55.5543 29.2642 55.5401 28.8182H56.3114C56.337 29.2812 56.5188 29.6619 56.8569 29.9602C57.195 30.2557 57.614 30.4034 58.114 30.4034C58.5032 30.4034 58.8498 30.3111 59.1538 30.1264C59.4577 29.9389 59.695 29.6832 59.8654 29.3594C60.0387 29.0327 60.1254 28.6648 60.1254 28.2557C60.1225 27.8295 60.0302 27.4545 59.8484 27.1307C59.6665 26.804 59.4194 26.5483 59.1069 26.3636C58.7972 26.179 58.4492 26.0866 58.0629 26.0866C57.7702 26.0838 57.4833 26.1321 57.2021 26.2315C56.9208 26.331 56.6864 26.4588 56.4989 26.6151L55.7021 26.5128L56.2262 22.2727H60.5387V22.9886H56.8952L56.5458 25.9077H56.5884C56.7816 25.7457 57.016 25.6136 57.2915 25.5114C57.57 25.4091 57.864 25.358 58.1737 25.358C58.6879 25.358 59.1495 25.4815 59.5586 25.7287C59.9705 25.9759 60.2958 26.3168 60.5344 26.7514C60.7759 27.1832 60.8967 27.6804 60.8967 28.2429C60.8967 28.794 60.7759 29.2869 60.5344 29.7216C60.2958 30.1534 59.9663 30.4943 59.5458 30.7443C59.1282 30.9943 58.6509 31.1193 58.114 31.1193Z" fill="#C4C4C4"/>
                                </svg>
                                
                         </a>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="wrap_footer_copywrite">
                        <ul class="wrap_socail_icons">
                            <li class="intagram"><a href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.99979 16C13.3084 16 16 13.309 16 10.0019C16 6.69469 13.3084 4 9.99979 4C6.69118 4 4 6.69262 4 10.0019C4 13.3111 6.6916 16 9.99979 16ZM5.45508 10.0002C5.45508 9.10129 5.72162 8.22255 6.221 7.47512C6.72038 6.7277 7.43017 6.14515 8.2606 5.80115C9.09104 5.45714 10.0048 5.36714 10.8864 5.54251C11.768 5.71788 12.5778 6.15075 13.2134 6.78638C13.849 7.42202 14.2818 8.23187 14.4572 9.11352C14.6325 9.99517 14.5425 10.909 14.1986 11.7395C13.8546 12.57 13.2721 13.2799 12.5247 13.7793C11.7773 14.2787 10.8987 14.5452 9.99979 14.5452C8.795 14.5435 7.64005 14.0641 6.78813 13.2121C5.93622 12.3601 5.45683 11.2051 5.45508 10.0002Z" fill="#F7F7F7" fill-opacity="0.91"/>
                              <path d="M15.9533 20H4.04959C2.97607 19.9983 1.947 19.5673 1.18791 18.8014C0.428817 18.0355 0.00163937 16.9971 0 15.9139V4.08606C0.00163937 3.00288 0.428817 1.96453 1.18791 1.1986C1.947 0.432678 2.97607 0.00165414 4.04959 0H15.9504C17.0239 0.00165414 18.053 0.432678 18.8121 1.1986C19.5712 1.96453 19.9984 3.00288 20 4.08606V15.9123C19.9988 16.9952 19.5722 18.0336 18.8137 18.7998C18.0552 19.566 17.0266 19.9976 15.9533 20ZM4.04959 1.48974C3.36738 1.49052 2.71334 1.7643 2.23095 2.25104C1.74856 2.73777 1.47721 3.39771 1.47645 4.08606V15.9123C1.47721 16.6006 1.74856 17.2606 2.23095 17.7473C2.71334 18.234 3.36738 18.5078 4.04959 18.5086H15.9504C16.6326 18.5077 17.2866 18.2339 17.7689 17.7472C18.2513 17.2605 18.5227 16.6006 18.5236 15.9123V4.08606C18.5227 3.39774 18.2513 2.73787 17.7689 2.25116C17.2866 1.76445 16.6326 1.49063 15.9504 1.48974H4.04959Z" fill="#F7F7F7" fill-opacity="0.91"/>
                              </svg>
                              </a></li>
                              <li class="tiktak"><a href="#"><svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M18.9958 8.90079C18.8146 8.91813 18.6322 8.92762 18.4502 8.92845C17.466 8.92847 16.4973 8.68568 15.6315 8.22199C14.7657 7.7583 14.03 7.0883 13.4909 6.27245V15.316C13.4909 16.638 13.0952 17.9303 12.3541 19.0295C11.6129 20.1286 10.5594 20.9853 9.32679 21.4912C8.09423 21.9971 6.73794 22.1295 5.42946 21.8716C4.12097 21.6137 2.91906 20.9771 1.9757 20.0423C1.03233 19.1075 0.389888 17.9166 0.129614 16.62C-0.130659 15.3235 0.00292319 13.9795 0.513469 12.7582C1.02401 11.5369 1.88859 10.493 2.99787 9.75854C4.10715 9.0241 5.41131 8.6321 6.74543 8.6321C6.88622 8.6321 7.0241 8.64448 7.16197 8.65315V11.9468C6.69604 11.889 6.22308 11.9264 5.77232 12.0568C5.32156 12.1872 4.90257 12.4078 4.54121 12.7049C4.17986 13.0021 3.88383 13.3695 3.67139 13.7844C3.45896 14.1994 3.33464 14.6531 3.30611 15.1175C3.27758 15.582 3.34545 16.0473 3.50553 16.4847C3.66561 16.9221 3.91449 17.3224 4.2368 17.6607C4.55912 17.9991 4.94803 18.2684 5.37951 18.452C5.81098 18.6356 6.27586 18.7296 6.74543 18.7282C8.64735 18.7282 10.3277 17.2423 10.3277 15.359L10.3606 0H13.5408C13.6857 1.36949 14.3119 2.64492 15.3098 3.60317C16.3078 4.56141 17.614 5.14146 19 5.24183V8.90244" fill="#F7F7F7" fill-opacity="0.91"/>
                                  </svg>
                                  
                                  </a></li>
                                  <li class="youtube"><a href="#"><svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.3861 0H5.61346C4.87625 -2.12301e-09 4.14626 0.142564 3.46518 0.419553C2.78409 0.696543 2.16525 1.10253 1.64399 1.61434C1.12273 2.12614 0.709258 2.73374 0.427181 3.40244C0.145104 4.07114 -5.64484e-05 4.78783 1.64666e-08 5.51161V12.4884C-5.64484e-05 13.2122 0.145104 13.9289 0.427181 14.5976C0.709258 15.2663 1.12273 15.8739 1.64399 16.3857C2.16525 16.8975 2.78409 17.3035 3.46518 17.5804C4.14626 17.8574 4.87625 18 5.61346 18H19.3861C20.875 18 22.3029 17.4193 23.3557 16.3857C24.4085 15.3521 25 13.9502 25 12.4884V5.51161C25 4.04984 24.4085 2.64794 23.3557 1.61431C22.3029 0.580685 20.875 0 19.3861 0ZM17.5803 9.05403L9.2315 13.4821C9.16777 13.5159 9.09618 13.5329 9.02374 13.5315C8.95129 13.53 8.88047 13.51 8.81823 13.4736C8.75599 13.4372 8.70446 13.3855 8.66867 13.3237C8.63289 13.2618 8.61408 13.1919 8.6141 13.1207L8.61238 4.23005C8.61235 4.15883 8.63119 4.08882 8.66705 4.0269C8.70291 3.96499 8.75456 3.91329 8.81692 3.87689C8.87928 3.84049 8.95021 3.82064 9.02274 3.81928C9.09527 3.81792 9.16692 3.8351 9.23064 3.86914L17.5833 8.33221C17.6493 8.36775 17.7043 8.42012 17.7426 8.4838C17.7808 8.54747 17.8008 8.62009 17.8005 8.694C17.8002 8.76791 17.7796 8.84036 17.7408 8.90373C17.7021 8.9671 17.6466 9.01902 17.5803 9.05403V9.05403Z" fill="#F7F7F7" fill-opacity="0.91"/>
                                      </svg>
                                      
                                      
                                      </a></li>
                                  <li class="facebook"><a href="#"><svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.59377 6.60021V4.8412C6.59377 3.98439 7.15096 3.78381 7.5409 3.78381H9.94573V0.0148573L6.63437 0C2.9592 0 2.12462 2.81144 2.12462 4.6109V6.59855H0V11.001H2.14352V22H6.42894V11.001H9.60884L10 6.60021H6.59377Z" fill="#F7F7F7" fill-opacity="0.91"/>
                                      </svg>
                                      
                                      </a></li>
                                      <li class="pin"><a href="#"><svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.54021 0.00711208C5.95098 0.00711208 2.33562 1.58666 0.72945 4.87991C-0.103145 6.58699 -0.26587 8.64408 0.464706 10.4168C0.77498 11.1692 1.26948 11.8519 1.95326 12.3203C2.22559 12.5069 2.72389 12.8569 3.07969 12.7644C3.43549 12.672 3.47385 12.1614 3.551 11.8672C3.63152 11.5626 3.81322 11.1919 3.64248 10.8956C3.41526 10.5002 3.0624 10.2117 2.89673 9.7692C2.67425 9.15524 2.57825 8.50419 2.61428 7.85369C2.73232 5.89731 3.83682 4.09282 5.55808 3.08697C8.22323 1.52847 12.7319 1.77281 14.2335 4.80025C14.9839 6.31252 14.7984 8.19213 14.3743 9.76755C13.9823 11.2241 13.1733 12.8458 11.6847 13.4822C10.3357 14.06 8.37753 13.5152 8.32694 11.8494C8.31218 11.3715 8.49093 10.8923 8.6292 10.4403C8.79024 9.91242 8.96983 9.3899 9.13508 8.86283C9.39856 8.01919 9.72528 7.0571 9.48456 6.17219C9.05456 4.59471 7.06266 4.62937 6.08504 5.68185C5.537 6.27331 5.26172 7.07278 5.20523 7.86111C5.16307 8.4472 5.33634 9.0271 5.47251 9.59462C5.52857 9.82781 5.62933 10.0561 5.59223 10.2909C5.54038 10.6211 5.42782 10.9513 5.3473 11.2753C5.0581 12.4365 4.76905 13.5975 4.48014 14.7584C4.23057 15.7605 3.91228 16.7742 3.76347 17.7966C3.63194 18.6971 3.63447 19.6151 3.70403 20.5206C3.7282 20.8332 3.76094 21.1448 3.80226 21.4555C3.8187 21.5793 3.80984 21.8682 3.91186 21.9615C4.17113 22.1992 4.72212 21.2644 4.8313 21.115C5.34266 20.4162 5.80765 19.6791 6.17315 18.8965C6.7018 17.7656 6.94968 16.5026 7.26923 15.3028C7.35551 14.9806 7.44179 14.6581 7.52807 14.3353C8.06346 15.3094 9.36231 15.8055 10.4285 15.8951C11.4297 15.9776 12.4836 15.7824 13.4039 15.3961C15.2588 14.6172 16.5808 13.0059 17.2852 11.1861C18.0441 9.22192 18.3147 6.84825 17.5184 4.85555C16.8139 3.09274 15.3747 1.68861 13.64 0.877994C12.0734 0.144971 10.4048 -0.00857239 8.69328 0.00669893C9.52883 -0.000730359 10.3665 -0.00361953 11.202 0.00669893C10.6468 -0.00031762 10.0912 0.00669893 9.53641 0.00669893C6.10064 0.00793715 14.6315 0.00711208 9.54021 0.00711208Z" fill="#F7F7F7" fill-opacity="0.91"/>
                                          </svg>
                                          
                                      
                                      </a></li>
                                      <li class="twitter"><a href="#"><svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M23.8936 2.34784C23.0602 2.67921 22.1854 2.89906 21.2926 3.00151C22.263 2.4434 23.0088 1.57388 23.4048 0.538841C23.41 0.524385 23.4106 0.508711 23.4065 0.49392C23.4024 0.479129 23.3938 0.46593 23.3818 0.456095C23.3698 0.44626 23.3551 0.440259 23.3396 0.438897C23.3241 0.437535 23.3085 0.440877 23.295 0.448475C22.3691 0.956549 21.367 1.31646 20.3262 1.5147C19.8595 1.03399 19.2983 0.651793 18.6766 0.39139C18.055 0.130987 17.386 -0.00217056 16.7104 2.67572e-05C13.9785 2.67572e-05 11.7591 2.1481 11.7591 4.79657C11.7593 5.16464 11.8025 5.53146 11.8878 5.88982C9.93249 5.79775 8.01789 5.30736 6.26511 4.44968C4.51233 3.59199 2.95953 2.38568 1.70494 0.907059C1.70214 0.903661 1.69855 0.900981 1.69447 0.89925C1.69039 0.897519 1.68594 0.896788 1.68151 0.89712C1.67708 0.897452 1.6728 0.898838 1.66903 0.901157C1.66526 0.903477 1.66212 0.906661 1.65988 0.910437C1.23443 1.63331 1.01004 2.45373 1.00932 3.28907C1.00932 4.91481 1.84698 6.35474 3.12665 7.2225C3.132 7.22622 3.136 7.23153 3.13804 7.23765C3.14009 7.24377 3.14007 7.25038 3.138 7.25649C3.13593 7.2626 3.13191 7.26789 3.12655 7.27158C3.12118 7.27527 3.11475 7.27717 3.1082 7.27698C2.37463 7.23976 1.65842 7.04382 1.01061 6.70311C1.00682 6.70069 1.00242 6.69934 0.997898 6.69923C0.993377 6.69911 0.988913 6.70023 0.985001 6.70246C0.981088 6.70469 0.97788 6.70795 0.975734 6.71186C0.973588 6.71578 0.972587 6.72021 0.972843 6.72465C0.984858 6.93578 1.05481 7.87575 1.30714 8.48002C1.93152 9.97696 3.27642 11.1217 4.94531 11.4469C4.51851 11.5576 4.07912 11.6143 3.63775 11.6158C3.33975 11.6151 3.04244 11.5878 2.74945 11.5343C2.74472 11.5334 2.73985 11.5338 2.73532 11.5354C2.73079 11.537 2.72676 11.5397 2.72363 11.5433C2.7205 11.5469 2.71839 11.5512 2.7175 11.5558C2.71661 11.5605 2.71697 11.5653 2.71855 11.5698C3.35753 13.4277 5.13413 14.7853 7.24674 14.855C7.25295 14.855 7.25902 14.8569 7.26408 14.8604C7.26914 14.864 7.27294 14.869 7.27493 14.8748C7.27693 14.8806 7.27701 14.8868 7.27519 14.8927C7.27337 14.8985 7.26972 14.9037 7.26477 14.9074C5.51435 16.2138 3.37623 16.9183 1.17925 16.9123C0.78521 16.9126 0.391479 16.8906 0 16.8464C2.27192 18.257 4.90414 19.0038 7.59047 19C11.4436 19 14.5579 17.691 16.8692 15.7042C19.2011 13.6976 20.7155 10.9976 21.3458 8.24735C21.567 7.2973 21.6806 6.32608 21.6844 5.35143C21.6844 5.14494 21.6793 4.93677 21.6686 4.73154C22.5628 4.10499 23.3458 3.33739 23.9859 2.45974C23.9955 2.44643 24.0005 2.43036 24 2.41401C23.9995 2.39766 23.9935 2.38193 23.983 2.36922C23.9726 2.35652 23.9581 2.34755 23.942 2.34369C23.9258 2.33982 23.9088 2.34128 23.8936 2.34784Z" fill="#F7F7F7" fill-opacity="0.91"/>
                                          </svg>
                                          
                                          
                                          </a></li>
                        </ul>
                        <p>All rights reserved © 2022 Proposal 007 </p>

                     </div>
                 </div>
             </div>
         </div>
     </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
