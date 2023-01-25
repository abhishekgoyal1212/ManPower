@extends('front.recuriter.AfterLogin.index')
@section('title', 'Recuriter')
@section('content')
<div class="checkout-help">
    <div class="container">
        <div class="checkout-help-section">
            <div class="checkout-help-title">
                <h2>Help</h2>
                <p class="mb-0">Frequently asked questions</p>
            </div>
            <div class="Desktop-Help">
            <div class="row">
                <div class="col-md-4">

                    <div class="Help_Tab_Left">
                        <ul class="nav nav-tabs tabs-left border-bottom-0">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">Top 10 FAQs
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">Advertising jobs
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">Managing jobs
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab4" data-toggle="tab">Managing applications
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab5" data-toggle="tab">Your Candidates
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab6" data-toggle="tab">CV Search
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab7" data-toggle="tab">Account settings
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab8" data-toggle="tab">Using third parties
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#tab9" data-toggle="tab">Technical help
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                            <li data-toggle="modal" data-target="#exampleModal">
                                <a>Contact us
                                    
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="accordion FAQs">
                                <h2>Top 10 FAQs</h2>
                                <h3 data-toggle="collapse" data-target="#TopFaqone" aria-expanded="true" aria-controls="TopFaqone"><span>1.</span>Why can't I sign in to my recruiter account?</h3>
                                <div class="FAQs-content collapse show" id="TopFaqone" aria-labelledby="headingFaqone" data-parent="#accordion">
                                    <p>If you're having trouble signing in, you should follow these steps:</p>
                                    <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                                    <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                                    <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqtwo" aria-expanded="true" aria-controls="TopFaqtwo"><span>2.</span>How do I get a VAT receipt for online payments?</h3>
                                <div class="FAQs-content collapse" id="TopFaqtwo" aria-labelledby="headingFaqtwo" data-parent="#accordion">
                                    <p>To view and download VAT receipts for online purchases made via your reed.co.uk recruiter account:</p>
                                    <ul>
                                        <li>Sign in to your account</li>
                                        <li>Click on the <a href="">'Account Settings'</a>tab</li>
                                        <li>Click on the <a href="">'Invoices'</a> button found within the 'Your Credits' section
                                        </li>
                                    </ul>
                                    <p>By default, transactions for all users within your account over the last six months will be displayed. However, you can use the drop down menus at the top of the page to filter transactions by users within your
                                        account and when the transactions took place.</p>
                                    <p>Once you've located the transaction for which you wish to produce a VAT receipt, click on the 'View' button for it to be displayed as a PDF which can be printed and saved to your computer.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqthree" aria-expanded="true" aria-controls="TopFaqthree"><span>3.</span>How do I advertise a job on reed.co.uk?</h3>
                                <div class="FAQs-content collapse" id="TopFaqthree" aria-labelledby="headingFaqthree" data-parent="#accordion">
                                    <p>From your signed in homepage or from the <a href="">'Jobs &amp; Applications'</a> page, click <a href="">'Post a Job Advert'</a>. It's then a simple case of choosing an advert type and completing the advert details.</p>

                                    <p>Your advert will go live once you've paid for the advert or, if you have chosen to buy job advert credits in advance, as soon as you click <a href="">'Post a Job Advert'</a></p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqfour" aria-expanded="true" aria-controls="TopFaqfour"><span>4.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="TopFaqfour" aria-labelledby="headingFaqfour" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>
                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>
                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job
                                        </li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqfive" aria-expanded="true" aria-controls="TopFaqfive"><span>5.</span>How do I get the best response from my job advert?</h3>
                                <div class="FAQs-content collapse" id="TopFaqfive" aria-labelledby="headingFaqfive" data-parent="#accordion">
                                    <p>Your job advert needs to encourage the best matching candidates to apply, whilst minimising the number of irrelevant candidates. Follow reed.co.uk's steps on <a href="">creating a perfect job</a> advert, and make
                                        sure that you use the applicant screening questions to filter out irrelevant candidates.</p>

                                    <p>It is also possible to add required skills and expertise to your job advert.</p>
                                    <p>Adding skills will allow candidates to find your job on our website and help them make an informed decision on if they are right for the vacancy you are advertising.</p>
                                    <p>If you have added skills to your job advert you will also be able to use our Best Match feature when you come to shortlisting candidates. </p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqsix" aria-expanded="true" aria-controls="TopFaqsix"><span>6.</span>How do I identify the most suitable applicants?</h3>
                                <div class="FAQs-content collapse" id="TopFaqsix" aria-labelledby="headingFaqsix" data-parent="#accordion">
                                    <p>A quick way to shortlist the most suitable applicants is by using the filter options.</p>

                                    <p>First, find the job via the <a href="">'Jobs &amp; Applications'</a> tab, click on the job title and then select 'Show filters' on the top right-hand side above the search results.</p>
                                    <p>From this page, you can select various criteria, including salary range, distance of the applicant from the job and the number of screening questions they've answered correctly.</p>
                                    <p> The filter will be applied automatically and you can edit it, hide it by clicking 'Hide filters' or remove it completely by clicking 'Clear'.</p>
                                    <p>If you have added skills to your job advert you will be able to use our Best Match feature. This will rank candidates, based on keywords in their CV, whether they've attached a covering letter, screening questions
                                        answered correctly, location, and salary. This is a quick and efficient way to shortlist your applicants against your specific requirements.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqseven" aria-expanded="true" aria-controls="TopFaqseven"><span>7.</span>How do I rate applicants?</h3>
                                <div class="FAQs-content collapse" id="TopFaqseven" aria-labelledby="headingFaqseven" data-parent="#accordion">
                                    <p>You can rate how suitable applicants are for your job using the colour-coded flags.</p>

                                    <p>When viewing a list of applicants, click on the flag symbol next to a candidate's name and choose from green (suitable), yellow (maybe) or red (unsuitable). </p>
                                    <p>You can access all applicants with the same rating by clicking on the rating categories on the left-hand side of the page. This allows you to easily perform useful actions, such as emailing all unsuitable applicants
                                        at once.</p>
                                    <p>You can also rate multiple applicants at the same time by ticking the checkbox next to their name and then clicking the 'Rate' button at the top of the list.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqeight" aria-expanded="true" aria-controls="TopFaqeight"><span>8.</span>How do I send a message to an applicant?</h3>
                                <div class="FAQs-content collapse" id="TopFaqeight" aria-labelledby="headingFaqeight" data-parent="#accordion">
                                    <p>When you've reviewed applicants to your job, you may want to send them an email. Candidates will appreciate a response, even if it's to notify them that they've been unsuccessful.</p>

                                    <p>When viewing a list of applicants you can email one or more by ticking the checkbox next to their name and then clicking on the 'Email' button at the top of the list. From this page, you can select from several
                                        standard message templates, such as 'Suitable' or 'Unsuitable', or create your own.</p>
                                    <p>Before sending the email, you can also choose whether to allow applicants to reply to your message. If you do allow replies, then your email address will be used, otherwise 'noreply@reed.co.uk' will be used.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqnine" aria-expanded="true" aria-controls="TopFaqnine"><span>9.</span>What's the best way to search for candidates?</h3>
                                <div class="FAQs-content collapse" id="TopFaqnine" aria-labelledby="headingFaqnine" data-parent="#accordion">
                                    <p>In <a href="">CV Search</a>, use keywords to search for candidates' CVs, combined with filters to remove irrelevant candidates and quickly identify the most suitable CVs.</p>

                                    <p>We've made the most commonly used (and useful) filters available as the default CV Search view:</p>
                                    <ul>
                                        <li>Location - search within a number of miles of a candidate's home address</li>
                                        <li>Salary - search within a salary range</li>
                                        <li>Sector - candidates registering on reed.co.uk tell us what sectors and specialisms they want work in: this filter helps remove candidates who may have the right skills, but the wrong experience</li>
                                        <li>Job type - this allows you to filter candidates looking for full-time or part-time, permanent, temporary, or contract work</li>
                                        <li>Activity - by default, your search will return candidates active (who have logged in) within the last month and who are, therefore, actively seeking work. If your first search doesn't return the right match,
                                            then broaden this filter e.g. 'registered within the last 3 months'.</li>
                                    </ul>
                                    <p>You'll be able to select other filters at the bottom of the "Filter candidates" section such as 'Qualifications', 'Languages', 'Transport', and 'Eligibility'.</p>
                                    <p>We recommend you start your search on a broad basis then refine it to find the best matching candidates.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopFaqten" aria-expanded="true" aria-controls="TopFaqten"><span>10.</span>How do I invite colleagues to my account?</h3>
                                <div class="FAQs-content collapse" id="TopFaqten" aria-labelledby="headingFaqten" data-parent="#accordion">
                                    <p>If you're an administrator for your account, you can invite colleagues to join it by clicking <a href="">'Account Settings'</a> and clicking the 'Invite new users' button.</p>

                                    <p>You can then enter the email addresses of the colleagues you wish to invite to your account. If you enter multiple email addresses, you should separate each one with commas.</p>
                                    <p>If you're not an account administrator, but would like to invite a colleague to your account, please contact your account administrator.</p>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="accordion FAQs">
                                <h2>Advertising Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#AdvertiseOne" aria-expanded="true" aria-controls="AdvertiseOne"><span>1.</span>How do I advertise a job on reed.co.uk?</h3>
                                <div class="FAQs-content collapse show" id="AdvertiseOne" aria-labelledby="headingAdvertiseone" data-parent="#accordion">
                                    <p>From your signed in homepage or from the <a href="">'Jobs &amp; Applications'</a> page, click <a href="">'Post a Job Advert'</a>. It's then a simple case of choosing an advert type and completing the advert details.</p>
                                    <p>Your advert will go live once you've paid for the advert or, if you have chosen to buy job advert credit in advance, as soon as you click 'Post Job Advert'.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AdvertiseTwo" aria-expanded="true" aria-controls="AdvertiseTwo"><span>2.</span>How do I get the best response from my job advert?</h3>
                                <div class="FAQs-content collapse" id="AdvertiseTwo" aria-labelledby="headingAdvertisetwo" data-parent="#accordion">
                                    <p>Your job advert needs to encourage the best matching candidates to apply, whilst minimising the number of irrelevant candidates. Follow reed.co.uk's steps on <a href="">creating a perfect job</a> advert, and make
                                        sure that you use the applicant screening questions to filter out irrelevant candidates.</p>
                                    <p>It is also possible to add skills and expertise that are required by the candidate to your job advert.</p>
                                    <p>Adding skills will allow candidates to find your job on our website and help them make an informed decision on if they are right for the vacancy you are advertising.</p>
                                    <p>If you have added skills to your job advert you will also be able to use our Best Match feature when you come to shortlisting candidates. </p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AdvertiseThree" aria-expanded="true" aria-controls="AdvertiseThree"><span>3.</span>Why am I being asked to buy credits?</h3>
                                <div class="FAQs-content collapse" id="AdvertiseThree" aria-labelledby="headingAdvertisethree" data-parent="#accordion">
                                    <p>When adding your vacancy, make sure you're selecting the correct advert type in the 'Choose advert type' option at the top of the <a href="">'Create your advert'</a> page. If you don't have any credits available,
                                        you can <a href="">buy more online</a> using a credit or debit card or by calling the Sales Hotline on 0845 241 9293.</p>

                                    <p>If you're a part of an account with multiple users, you may need to ask an account administrator to allocate you more credits. If you're an administrator, you can allocate credits manually. Go to <a href="">'Account Settings'</a>                                            and click 'Switch to manual credit allocation' in the 'Your Credits' section. You can then click <a href=""> to ensure you have allocated yourself credits.</a></p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AdvertiseFour" aria-expanded="true" aria-controls="AdvertiseFour"><span>4.</span>Can I use the same advert to advertise different jobs?</h3>
                                <div class="FAQs-content collapse" id="AdvertiseFour" aria-labelledby="headingAdvertisefour" data-parent="#accordion">
                                    <p>Each job advert can be used to advertise one position. You will not be able to edit the job title or the location of the role once you receive your first application, without spending an additional job advertising
                                        credit.
                                    </p>


                                </div>

                                <h3 data-toggle="collapse" data-target="#AdvertiseFive" aria-expanded="true" aria-controls="AdvertiseFive"><span>5.</span>How do I add a similar advert or copy an old advert?</h3>
                                <div class="FAQs-content collapse" id="AdvertiseFive" aria-labelledby="headingAdvertisefive" data-parent="#accordion">
                                    <p>When <a href="">creating your job advert</a> , click 'Prefill from existing advert' at the top of the page to copy the details of a live, ended or draft job into a new advert. You will be able to amend the details
                                        before advertising the job.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#AdvertiseSix" aria-expanded="true" aria-controls="AdvertiseSix"><span>6.</span>I completed the job details, but did not post the job on reed.co.uk. Can I still access it?</h3>
                                <div class="FAQs-content collapse" id="AdvertiseSix" aria-labelledby="headingAdvertisesix" data-parent="#accordion">

                                    <p>We automatically save a draft version of the job as you are adding it. You can also save a copy by clicking the 'Save draft' button when adding the job. These drafts are stored under the 'Draft' section on the
                                        <a href="">'Jobs &amp; Applications'</a> page. Click on the job title to edit and post the advert.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#ManageOne" aria-expanded="true" aria-controls="ManageOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="ManageOne" aria-labelledby="headingManageone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#ManageTwo" aria-expanded="true" aria-controls="ManageTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="ManageTwo" aria-labelledby="headingManagetwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#ManageThree" aria-expanded="true" aria-controls="ManageThree"><span>3.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="ManageThree" aria-labelledby="headingManagethree" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>

                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>

                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job</li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#ManageFour" aria-expanded="true" aria-controls="ManageFour"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="ManageFour" aria-labelledby="headingManagefour" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                                <h3 data-toggle="collapse" data-target="#ManageFive" aria-expanded="true" aria-controls="ManageFive"><span>5.</span>How do I extend a job advert or end it early?</h3>
                                <div class="FAQs-content collapse" id="ManageFive" aria-labelledby="headingManagefive" data-parent="#accordion">
                                    <p>If you'd like to end your job early, or keep it on reed.co.uk for longer, you can do this from the <a href="">'Jobs &amp; Applications'</a> section.</p>
                                    <ol>
                                        <li>To end jobs early, click one or more jobs you'd like to end and click the 'End early' button.</li>
                                        <li>To extend jobs, click one or more jobs you'd like to extend and click the 'Extend' button.</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#AppOne" aria-expanded="true" aria-controls="AppOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="AppOne" aria-labelledby="headingAppone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AppTwo" aria-expanded="true" aria-controls="AppTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="AppTwo" aria-labelledby="headingApptwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AppThree" aria-expanded="true" aria-controls="AppThree"><span>3.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="AppThree" aria-labelledby="headingAppthree" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>

                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>

                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job</li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AppFour" aria-expanded="true" aria-controls="AppFour"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="AppFour" aria-labelledby="headingAppfour" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                                <h3 data-toggle="collapse" data-target="#AppFive" aria-expanded="true" aria-controls="AppFive"><span>5.</span>How do I extend a job advert or end it early?</h3>
                                <div class="FAQs-content collapse" id="AppFive" aria-labelledby="headingAppfive" data-parent="#accordion">
                                    <p>If you'd like to end your job early, or keep it on reed.co.uk for longer, you can do this from the <a href="">'Jobs &amp; Applications'</a> section.</p>
                                    <ol>
                                        <li>To end jobs early, click one or more jobs you'd like to end and click the 'End early' button.</li>
                                        <li>To extend jobs, click one or more jobs you'd like to extend and click the 'Extend' button.</li>
                                    </ol>
                                </div>

                                <h3 data-toggle="collapse" data-target="#AppSix" aria-expanded="true" aria-controls="AppSix"><span>5.</span>How do I extend a job advert or end it early?</h3>
                                <div class="FAQs-content collapse" id="AppSix" aria-labelledby="headingAppsix" data-parent="#accordion">
                                    <p>If you'd like to end your job early, or keep it on reed.co.uk for longer, you can do this from the <a href="">'Jobs &amp; Applications'</a> section.</p>
                                    <ol>
                                        <li>To end jobs early, click one or more jobs you'd like to end and click the 'End early' button.</li>
                                        <li>To extend jobs, click one or more jobs you'd like to extend and click the 'Extend' button.</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab5">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#CandidateOne" aria-expanded="true" aria-controls="CandidateOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="CandidateOne" aria-labelledby="headingCandidateone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CandidateTwo" aria-expanded="true" aria-controls="CandidateTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="CandidateTwo" aria-labelledby="headingCandidatetwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CandidateThree" aria-expanded="true" aria-controls="CandidateThree"><span>3.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="CandidateThree" aria-labelledby="headingCandidatethree" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>

                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>

                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job</li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CandidateFour" aria-expanded="true" aria-controls="CandidateFour"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="CandidateFour" aria-labelledby="headingCandidatefour" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#CvOne" aria-expanded="true" aria-controls="CvOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="CvOne" aria-labelledby="headingCvone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CvTwo" aria-expanded="true" aria-controls="CvTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="CvTwo" aria-labelledby="headingCvtwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CvThree" aria-expanded="true" aria-controls="CvThree"><span>3.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="CvThree" aria-labelledby="headingCvthree" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>

                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>

                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job</li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#CvFour" aria-expanded="true" aria-controls="CvFour"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="CvFour" aria-labelledby="headingCvfour" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                                <h3 data-toggle="collapse" data-target="#CvFive" aria-expanded="true" aria-controls="CvFive"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="CvFive" aria-labelledby="headingCvfive" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab7">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#AccountOne" aria-expanded="true" aria-controls="AccountOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="AccountOne" aria-labelledby="headingAccountone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AccountTwo" aria-expanded="true" aria-controls="AccountTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="AccountTwo" aria-labelledby="headingAccounttwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AccountThree" aria-expanded="true" aria-controls="AccountThree"><span>3.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="AccountThree" aria-labelledby="headingAccountthree" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>

                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>

                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job</li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#AccountFour" aria-expanded="true" aria-controls="AccountFour"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="AccountFour" aria-labelledby="headingAccountfour" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                                <h3 data-toggle="collapse" data-target="#AccountFive" aria-expanded="true" aria-controls="AccountFive"><span>4.</span>How do I make changes to more than one job at a time?</h3>
                                <div class="FAQs-content collapse" id="AccountFive" aria-labelledby="headingAccountfive" data-parent="#accordion">
                                    <p>To change more than one of your adverts at the same time, go to the <a href="">'Jobs &amp; Applications'</a> section and tick the jobs that you want to update. You should then click the relevant button at the top of
                                        the page. The changes you can make in bulk are:
                                    </p>

                                    <ol>
                                        <li>Extend multiple adverts</li>
                                        <li>End multiple adverts</li>
                                        <li>Delete multiple drafts</li>
                                        <li>Relist multiple ended jobs</li>
                                    </ol>


                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab8">
                            <div class="accordion FAQs">
                                <h2>Managing Jobs</h2>
                                <h3 data-toggle="collapse" data-target="#ThirdpartiesOne" aria-expanded="true" aria-controls="ThirdpartiesOne"><span>1.</span>How do I find a job advert I've already added?</h3>
                                <div class="FAQs-content collapse show" id="ThirdpartiesOne" aria-labelledby="headingThirdpartiesone" data-parent="#accordion">
                                    <p>To find a job you've added to reed.co.uk in the past, click on the <a href="">'Jobs &amp; Applications'</a> tab.</p>
                                    <p>On this page, you'll see all of your Active Job Adverts (those adverts which can currently be found on reed.co.uk for candidates). You can use the 'Sort jobs by' drop down option above the list of results to sort
                                        your adverts. This can be helpful if you're looking for an advert:</p>
                                    <ol>
                                        <li>you have recently created</li>
                                        <li>with a lot of unread applications</li>
                                        <li>that is ending soon</li>
                                        <li>with a job title beginning with a specific letter</li>
                                        <li>in a specific location</li>
                                    </ol>
                                    <p>If you know the name or reference number of the job you're looking for, you can use the 'Find' bar at the top of the page. Just enter the name or reference number and click the magnifying glass icon.</p>
                                    <p>Lastly, you can sort on each column by clicking the column header. For example, to sort by job views (highest to lowest), click on the 'Views' column heading. If you'd prefer to sort lowest to highest, click the
                                        header again.</p>
                                    <p>Please note: if the advert you're looking for has ended, click the 'Ended' link on the left. Ended adverts are kept for three months after their expiry date.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#ThirdpartiesTwo" aria-expanded="true" aria-controls="ThirdpartiesTwo"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="ThirdpartiesTwo" aria-labelledby="headingThirdpartiestwo" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#ThirdpartiesThree" aria-expanded="true" aria-controls="ThirdpartiesThree"><span>2.</span>How do I save draft jobs before I post them?</h3>
                                <div class="FAQs-content collapse" id="ThirdpartiesThree" aria-labelledby="headingThirdpartiesthree" data-parent="#accordion">
                                    <p>While you're adding details of a job advert to the website, you can save your progress.</p>
                                    <p>We'll also automatically save your progress for you at regular intervals. This will ensure you don't lose your work if your browser or PC crashes or if you're interrupted whilst entering the details.</p>
                                    <p>When you'd like to finish adding a job advert from draft format, click on the <a href="">'Jobs &amp; Applications'</a> tab, and then click 'Draft'.</p>
                                    <p>Here you'll see all of your saved drafts. Find the draft you were working on (you'll see the job title, location and end date to help you). Click on the title of the job and you'll be taken to the <a href="">'Create your advert'</a>                                            page with all the details you previously entered pre-filled. </p>
                                    <p>From there, complete the form, make any necessary changes and post your advert. The draft will then be removed.</p>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab9">
                            <div class="accordion FAQs">
                                <h2>Top 10 FAQs</h2>
                                <h3 data-toggle="collapse" data-target="#TopHelpone" aria-expanded="true" aria-controls="TopHelpone"><span>1.</span>Why can't I sign in to my recruiter account?</h3>
                                <div class="FAQs-content collapse show" id="TopHelpone" aria-labelledby="headingHelpone" data-parent="#accordion">
                                    <p>If you're having trouble signing in, you should follow these steps:</p>
                                    <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                                    <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                                    <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelptwo" aria-expanded="true" aria-controls="TopHelptwo"><span>2.</span>How do I get a VAT receipt for online payments?</h3>
                                <div class="FAQs-content collapse" id="TopHelptwo" aria-labelledby="headingHelptwo" data-parent="#accordion">
                                    <p>To view and download VAT receipts for online purchases made via your reed.co.uk recruiter account:</p>
                                    <ul>
                                        <li>Sign in to your account</li>
                                        <li>Click on the <a href="">'Account Settings'</a>tab</li>
                                        <li>Click on the <a href="">'Invoices'</a> button found within the 'Your Credits' section
                                        </li>
                                    </ul>
                                    <p>By default, transactions for all users within your account over the last six months will be displayed. However, you can use the drop down menus at the top of the page to filter transactions by users within your
                                        account and when the transactions took place.</p>
                                    <p>Once you've located the transaction for which you wish to produce a VAT receipt, click on the 'View' button for it to be displayed as a PDF which can be printed and saved to your computer.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpthree" aria-expanded="true" aria-controls="TopHelpthree"><span>3.</span>How do I advertise a job on reed.co.uk?</h3>
                                <div class="FAQs-content collapse" id="TopHelpthree" aria-labelledby="headingHelpthree" data-parent="#accordion">
                                    <p>From your signed in homepage or from the <a href="">'Jobs &amp; Applications'</a> page, click <a href="">'Post a Job Advert'</a>. It's then a simple case of choosing an advert type and completing the advert details.</p>

                                    <p>Your advert will go live once you've paid for the advert or, if you have chosen to buy job advert credits in advance, as soon as you click <a href="">'Post a Job Advert'</a></p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpfour" aria-expanded="true" aria-controls="TopHelpfour"><span>4.</span>How do I edit a job advert?</h3>
                                <div class="FAQs-content collapse" id="TopHelpfour" aria-labelledby="headingHelpfour" data-parent="#accordion">
                                    <p>To make a change to a job advert, first find the job via <a href="">'Jobs &amp; Applications'</a>, click on its title and then click 'Edit advert'.</p>
                                    <p>Once you've finished making changes, click the orange 'Update Job' button at the bottom of the page. All changes can be made free of charge, other than the following, which will cost a credit:</p>
                                    <ul>
                                        <li>Changing the job title after you've received your first application</li>
                                        <li>Changing the location after you've received your first application</li>
                                        <li>Changing the end date of a job
                                        </li>
                                        <li>Changing the advert type</li>
                                    </ul>
                                    <p>Please note: You'll only be charged a single credit if you change more than one of the above.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpfive" aria-expanded="true" aria-controls="TopHelpfive"><span>5.</span>How do I get the best response from my job advert?</h3>
                                <div class="FAQs-content collapse" id="TopHelpfive" aria-labelledby="headingHelpfive" data-parent="#accordion">
                                    <p>Your job advert needs to encourage the best matching candidates to apply, whilst minimising the number of irrelevant candidates. Follow reed.co.uk's steps on <a href="">creating a perfect job</a> advert, and make
                                        sure that you use the applicant screening questions to filter out irrelevant candidates.</p>

                                    <p>It is also possible to add required skills and expertise to your job advert.</p>
                                    <p>Adding skills will allow candidates to find your job on our website and help them make an informed decision on if they are right for the vacancy you are advertising.</p>
                                    <p>If you have added skills to your job advert you will also be able to use our Best Match feature when you come to shortlisting candidates. </p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpsix" aria-expanded="true" aria-controls="TopHelpsix"><span>6.</span>How do I identify the most suitable applicants?</h3>
                                <div class="FAQs-content collapse" id="TopHelpsix" aria-labelledby="headingHelpsix" data-parent="#accordion">
                                    <p>A quick way to shortlist the most suitable applicants is by using the filter options.</p>

                                    <p>First, find the job via the <a href="">'Jobs &amp; Applications'</a> tab, click on the job title and then select 'Show filters' on the top right-hand side above the search results.</p>
                                    <p>From this page, you can select various criteria, including salary range, distance of the applicant from the job and the number of screening questions they've answered correctly.</p>
                                    <p> The filter will be applied automatically and you can edit it, hide it by clicking 'Hide filters' or remove it completely by clicking 'Clear'.</p>
                                    <p>If you have added skills to your job advert you will be able to use our Best Match feature. This will rank candidates, based on keywords in their CV, whether they've attached a covering letter, screening questions
                                        answered correctly, location, and salary. This is a quick and efficient way to shortlist your applicants against your specific requirements.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpseven" aria-expanded="true" aria-controls="TopHelpseven"><span>7.</span>How do I rate applicants?</h3>
                                <div class="FAQs-content collapse" id="TopHelpseven" aria-labelledby="headingHelpseven" data-parent="#accordion">
                                    <p>You can rate how suitable applicants are for your job using the colour-coded flags.</p>

                                    <p>When viewing a list of applicants, click on the flag symbol next to a candidate's name and choose from green (suitable), yellow (maybe) or red (unsuitable). </p>
                                    <p>You can access all applicants with the same rating by clicking on the rating categories on the left-hand side of the page. This allows you to easily perform useful actions, such as emailing all unsuitable applicants
                                        at once.</p>
                                    <p>You can also rate multiple applicants at the same time by ticking the checkbox next to their name and then clicking the 'Rate' button at the top of the list.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpeight" aria-expanded="true" aria-controls="TopHelpeight"><span>8.</span>How do I send a message to an applicant?</h3>
                                <div class="FAQs-content collapse" id="TopHelpeight" aria-labelledby="headingHelpeight" data-parent="#accordion">
                                    <p>When you've reviewed applicants to your job, you may want to send them an email. Candidates will appreciate a response, even if it's to notify them that they've been unsuccessful.</p>

                                    <p>When viewing a list of applicants you can email one or more by ticking the checkbox next to their name and then clicking on the 'Email' button at the top of the list. From this page, you can select from several
                                        standard message templates, such as 'Suitable' or 'Unsuitable', or create your own.</p>
                                    <p>Before sending the email, you can also choose whether to allow applicants to reply to your message. If you do allow replies, then your email address will be used, otherwise 'noreply@reed.co.uk' will be used.</p>

                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpnine" aria-expanded="true" aria-controls="TopHelpnine"><span>9.</span>What's the best way to search for candidates?</h3>
                                <div class="FAQs-content collapse" id="TopHelpnine" aria-labelledby="headingHelpnine" data-parent="#accordion">
                                    <p>In <a href="">CV Search</a>, use keywords to search for candidates' CVs, combined with filters to remove irrelevant candidates and quickly identify the most suitable CVs.</p>

                                    <p>We've made the most commonly used (and useful) filters available as the default CV Search view:</p>
                                    <ul>
                                        <li>Location - search within a number of miles of a candidate's home address</li>
                                        <li>Salary - search within a salary range</li>
                                        <li>Sector - candidates registering on reed.co.uk tell us what sectors and specialisms they want work in: this filter helps remove candidates who may have the right skills, but the wrong experience</li>
                                        <li>Job type - this allows you to filter candidates looking for full-time or part-time, permanent, temporary, or contract work</li>
                                        <li>Activity - by default, your search will return candidates active (who have logged in) within the last month and who are, therefore, actively seeking work. If your first search doesn't return the right match,
                                            then broaden this filter e.g. 'registered within the last 3 months'.</li>
                                    </ul>
                                    <p>You'll be able to select other filters at the bottom of the "Filter candidates" section such as 'Qualifications', 'Languages', 'Transport', and 'Eligibility'.</p>
                                    <p>We recommend you start your search on a broad basis then refine it to find the best matching candidates.</p>
                                </div>

                                <h3 data-toggle="collapse" data-target="#TopHelpten" aria-expanded="true" aria-controls="TopHelpten"><span>10.</span>How do I invite colleagues to my account?</h3>
                                <div class="FAQs-content collapse" id="TopHelpten" aria-labelledby="headingHelpten" data-parent="#accordion">
                                    <p>If you're an administrator for your account, you can invite colleagues to join it by clicking <a href="">'Account Settings'</a> and clicking the 'Invite new users' button.</p>

                                    <p>You can then enter the email addresses of the colleagues you wish to invite to your account. If you enter multiple email addresses, you should separate each one with commas.</p>
                                    <p>If you're not an account administrator, but would like to invite a colleague to your account, please contact your account administrator.</p>
                                </div>


                            </div>
                        </div>
                        <!-- <div class="tab-pane" id="tab10"></div> -->
                    </div>
                </div>
            </div>
            </div>



            <div class="mobile-help">
                <div class="card border-0">

<div class="card-body">
<div class="flex flex-column  faq-section">
  <div class="row">
    <div class="col-md-12 px-0">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="heading-1">
            <h5 class="mb-0">
              <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                  What is FXCopier?
               </a>
            </h5>
          </div>
          <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
            <div class="card-body">
            <details>
                <summary>1. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>2. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>3. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>4. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>5. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>6. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>7. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>8. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>9. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>
               <details>
                <summary>10. Why can't I sign in to my recruiter account?</summary>
                 <div class="FAQs-content">
                   <p>If you're having trouble signing in, you should follow these steps:</p>
                      <p>1. Make sure you're using reed.co.uk's recruiter site, rather than the site for jobseekers. 1IGS Manpower site for recruiters is <a href=""> www.1IGSManpower.com/recruiter</a></p>
                      <p>2. Make sure you're using the correct username and password. Your username will usually be your email address.</p>
                      <p>3. If you have forgotten your password, you can <a href="">request a password reset email.</a></p>
                </div>
            </details>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="heading-2">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-3">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-4">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-5">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="heading-5">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-6">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-6" class="collapse" data-parent="#accordion" aria-labelledby="heading-6">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-7">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-7" class="collapse" data-parent="#accordion" aria-labelledby="heading-7">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-8">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-8" class="collapse" data-parent="#accordion" aria-labelledby="heading-8">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header" id="heading-9">
            <h5 class="mb-0">
              <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                 How to get this trade copier?
                </a>
            </h5>
          </div>
          <div id="collapse-9" class="collapse" data-parent="#accordion" aria-labelledby="heading-9">
            <div class="card-body">
              After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.
            </div>
          </div>
        </div>
         <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="modal" data-target="#exampleModal-2">
                 How to get this trade copier?
                </a>
            </h5>

          </div>
          
        </div>
      </div>
    </div>
    
  </div>
</div>
</div>
</div>
            </div>

        </div>
        <div class="reports-account">
            <p>View reports on your account's activity, credit spend, and market insights. <a href="">View your reports.</a></p>
        </div>
    </div>
</div>

<div class="contact-popup modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalToLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalToLabel">Contact Us</h5>
                <i class="bi bi-x-lg close" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form>
                        <div class="contact-back">
                            <input type="checkbox">
                            <label class="mb-0">Please call me back</label>
                        </div>
                        <div class="contact-by">
                            <label>Subject</label>
                            <select>
                                <option>Feedback - comments &amp; suggestions</option>
                                <option>Sales - product information</option>
                                <option>Help - difficulty using the site</option>
                                <option>General enquiry</option>
                            </select>
                        </div>
                        <div class="contact-by">
                            <label>Message</label>
                            <textarea></textarea>
                        </div>
                        <div class="contact-by">
                            <label>Reply to</label>
                            <input type="text" placeholder="Email I'd">
                        </div>
                        <div class="text-right mt-3"><input type="submit" value="Send" class="border-0"></div>
                    </form>
                </div>
                <div class="contact-info">
                    <div><img src="images/contact-online.jpg" alt="" class="img-fluid">
                    </div>
                    <p class="my-2">Call us on:</p>
                    <h5>0845 241 9293</h5>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="contact-popup modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <i class="bi bi-x-lg close" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form>
                        <div class="contact-back">
                            <input type="checkbox">
                            <label class="mb-0">Please call me back</label>
                        </div>
                        <div class="contact-by">
                            <label>Subject</label>
                            <select>
                                <option>Feedback - comments &amp; suggestions</option>
                                <option>Sales - product information</option>
                                <option>Help - difficulty using the site</option>
                                <option>General enquiry</option>
                            </select>
                        </div>
                        <div class="contact-by">
                            <label>Message</label>
                            <textarea></textarea>
                        </div>
                        <div class="contact-by">
                            <label>Reply to</label>
                            <input type="text" placeholder="Email I'd">
                        </div>
                        <div class="text-right mt-3"><input type="submit" value="Send" class="border-0"></div>
                    </form>
                </div>
                <div class="contact-info">
                    <div><img src="images/contact-online.jpg" alt="" class="img-fluid">
                    </div>
                    <p class="my-2">Call us on:</p>
                    <h5>0845 241 9293</h5>
                </div>
            </div>

        </div>
    </div>
</div>
@stop