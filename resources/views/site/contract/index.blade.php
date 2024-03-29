<!-- commit by jhonkings -->
@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/lab-reservation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightpick_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
    <link rel="shortcut icon" sizes="16x16" href="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_qp2.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Extended" rel="stylesheet" nonce="SXP3BtdUd_5uEonYEmpRcA">
    <link rel="stylesheet" href="https://www.gstatic.com/_/freebird/_/ss/k=freebird.v.fBQ93NgRGRA.L.W.O/am=wA/d=1/rs=AMjVe6jBYR1CRMfm_KwQT-t08msyO5v8Yw" data-id="_cl" nonce="SXP3BtdUd_5uEonYEmpRcA">
    <link href="https://fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:300,400,400i,500,700&subset=latin,vietnamese,latin-ext,cyrillic,greek,cyrillic-ext,greek-ext" rel="stylesheet" nonce="SXP3BtdUd_5uEonYEmpRcA">
@endsection
@section('content')
    <div class="container">
        <div class="bg-image d-flex justify-content-center align-items-center">
            <img src="https://lh3.googleusercontent.com/UVuj6-8yG1CVJlRLNFLkXZDSkUX4oJr_XnueT-DQgFrkTyGbvIgl3gNA3WD4qWQcGy_cd0Dfrj07ig_ZnbED5UH5vk0rtkPRoM6eChvl5L6RYv5TEZZ3Z7vT3QWF57ABzQ=w302" style="width: 57.5%;" alt="">
        </div>
        <div class="row d-flex justify-content-center visible" id="part_1">
            <div class="main-container">
                <!-- <div> -->
                    <div class="line-top mt-4"></div>
                    <div class="col text-center title bg-white pl-4 pb-2">GENERAL CONTRACT FOR SERVICES</div>
                    <div class="bg-white pl-4 pr-4">
                        This Contract for Services is made effective as of February 4, 2013, by and 
                        between <b>selected lab</b>, and Telcron LLC of P.O. Box 1398,Montclair, New Jersey 
                        07042 (NJ Registration id: 0600386534).
                    </div>
                    <div class="u-line"></div>
                    <div class="bg-white pl-4 pr-4 pt-2 pb-2">
                        <span><b>jhonkings0403@gmail.com</b></span>
                        <a href="https://accounts.google.com/AccountChooser?continue=https://docs.google.com/forms/d/e/1FAIpQLSdeL0mmoyMxb2Q-FAVwqTV44IgzXV8farOIVMSqmaIRiGKKvQ/viewform?vc%3D0%26c%3D0%26w%3D1%26flr%3D0%26pli%3D1&service=wise">Switch account</a>
                        <!-- <img src="https://ssl.gstatic.com/docs/forms/qp_sprite194.svg" alt=""> -->
                        <div class="d-flex">
                            <div class="img" aria-hidden="true">ss</div>
                            <div>Not shared</div>
                        </div>
                    </div>
                    <div class="u-line"></div>
                    <div class="bg-white radius-bottom">
                        <div class="text-danger pt-2 pb-2 pl-4">* Indicates required question</div>
                    </div>
                <!-- </div> -->
                <div class="bg-white p-4 mt-4 radius-top radius-bottom">
                    <span>Please read and accept the following details of contract for services.
                        <br>
                        <br>
                        <div>1. DESCRIPTION OF SERVICES. Beginning on February 4, 2013, Telcron LLC will provide to
                            <b>&nbsp;</b><b>selected lab</b>  the following services (collectively, the "Services"):
                            Representative for electrical/electronic testing and certification services 
                        </div>
                        <div><br></div>
                        <div>2. PAYMENT. Payment shall be made to Telcron LLC, Montclair, New Jersey 07042. 
                            <b>&nbsp;</b><b>selected lab</b>   agrees to pay Telcron LLC as follows:
                            on mutually agreed upon terms and conditions. A commission of 10% will be paid after receipt
                            of payment for invoiced work. Commissions are based on work performed by 
                            <b>selected lab</b> . In the event that a credit has been provided, the commission that has been
                            previously paid can be deducted from the next commission pay period. 
                        </div>
                        <div><br></div>
                        <div>3. TERM. This Contract may be terminated by either party upon 60 days prior written notice to the other party.
                        </div>
                        <div><br></div>
                        <div>4. WORK PRODUCT OWNERSHIP. Any copyrightable works, ideas, discoveries,
                            inventions, patents, products, or other information (collectively the "Work Product") developed
                            in whole or in part by Telcron LLC in connection with the Services will be the exclusive
                            property of Telcron LLC, 
                        </div>
                        <div><br></div>
                        <div>5. CONFIDENTIALITY. Telcron LLC, and its employees, agents, or representatives will not at
                            any time or in any manner, either directly or indirectly, use for the personal benefit of Telcron
                            LLC, or divulge, disclose, or communicate in any manner, any information that is proprietary to <b>selected lab</b>
                            . Teleron LLC and its employees, agents, and representatives will protect
                            such information and treat it as strictly confidential. This provision will continue to be effective
                            after the termination of this Contract.
                            Upon termination of this Contract, Teleron LLC will return to <b>selected lab &nbsp;</b>
                            all records,
                            notes, documentation and other items that were used, created, or controlled by Teleron LLC
                            during the term of this Contract. 
                        </div>
                        <div><br></div>
                        <div>6. WARRANTY. Telcron LLC shall provide its services and meet its obligations under this
                            Contract in a timely and workmanlike manner, using knowledge and recommendations for
                            performing the services which meet generally acceptable standards in Telcron LLC's community
                            and region, and will provide a standard of care equal to, or superior to, care used by service
                            providers similar to Teleron LLC on similar projects. 
                        </div>
                        <div><br></div>
                        <div>7. FORCE MAJEURE. If performance of this Contract or any obligation under this Contract is
                            prevented, restricted, or interfered with by causes beyond either party's reasonable control
                            ("Force Majeure"), and if the party unable to carry out its obligations gives the other party
                            prompt written notice of such event, then the obligations of the party invoking this provision
                            shall be suspended to the extent necessary by such event. The term Force Majeure shall include,
                            without limitation, acts of God, fire, explosion, vandalism, storm or other similar occurrence,
                            orders or acts of military or civil authority, or by national emergencies, insurrections, riots, or
                            wars, or strikes, lock-outs, work stoppages, or other labor disputes, or supplier failures. The
                            excused party shall use reasonable efforts under the circumstances to avoid or remove such
                            causes of non-performance and shall proceed to perform with reasonable dispatch whenever such
                            causes are removed or ceased. An act or omission shall be deemed within the reasonable control
                            of a party
                            if committed, omitted, or caused by such party, or its employees, officers, agents, or
                            affiliates. 
                        </div>
                        <div><br></div>
                        <div>8. ENTIRE AGREEMENT. This Contract contains the entire agreement of the parties, and
                            there are no other promises or conditions in any other agreement whether oral or written
                            concerning the subject matter of this Contract. This Contract supersedes any prior written or oral
                            agreements between the parties. 
                        </div>
                        <div><br></div>
                        <div>9. SEVERABILITY. If any provision of this Contract will be held to be invalid or
                            unenforceable for any reason, the remaining provisions will continue to be valid and enforceable.
                            If a court finds that any provision of this Contract is invalid or unenforceable, but that by limiting
                            such provision it would become valid and enforceable, then such provision will be deemed to be
                            written, construed, and enforced as so limited. 
                        </div>
                        <div><br></div>
                        <div>10. AMENDMENT. This Contract may be modified or amended in writing, if the writing is
                            signed by the party obligated under the amendment. 
                        </div>
                        <div><br></div>
                        <div>11. GOVERNING LAW. This Contract shall be construed in accordance with the laws of the
                            State of Florida. 
                        </div>
                        <div><br></div>
                        <div>12. NOTICE. Any notice or communication required or permitted under this Contract shall be
                            sufficiently given if delivered in person or by certified mail, return receipt requested, to the
                            address set forth in the opening paragraph or to such other address as one party may have
                            furnished to the other in writing. 
                        </div>
                        <div><br></div>
                        <div>13. WAIVER OF CONTRACTUAL RIGHT. The failure of either party to enforce any
                            provision of this Contract shall not be construed as a waiver or limitation of that party's right to
                            subsequently enforce and compel strict compliance with every provision of this Contract. 
                        </div>
                        <div><br></div>
                        <div>IN WITNESS WHERE OF, the parties hereto have caused this Agreement to be executed by their
                            duly authorized representatives as of the date first above written.
                        </div>
                        <div><br></div>
                        <div>Service Provider:</div>
                        <div>Telcron LLC</div>
                        <div>By&nbsp;<span>Bayo Olabisi</span>
                        </div>
                    </span>
                    <div>
                        <input type="checkbox" class="checkbox" name="check_read" >&nbsp;
                        <span class="aDTYNe snByac n5vBHf OIC90c">I have read and accept the general contract for services</span>
                    </div>
                    <div>
                        <input type="checkbox" class="checkbox" name="check_declined" >&nbsp;
                        <span class="aDTYNe snByac n5vBHf OIC90c">I declined the general contract for services</span>
                    </div>
                </div>
            </div>
            <div class="main-container mt-2">
                <div class="btn-group">
                    <div class="group">
                        <button class="next-btn" onclick="visiblehidden();">Next</button>
                        <button type="button" class="btn-clear">Clear form</button>
                    </div>
                    <div class="sub-letter">Never submit passwords through Google Forms.</div>
                    <div class="sub-letter text-center text-center">Never submit passwords through Google Forms.
                        <a href="">Report Abuse</a>-
                        <a href="">Terms of Service</a>-
                        <a href="">Privacy Policy</a>
                    </div>
                    <div class="sub-title">
                        <a href="https://www.google.com/forms/about/?utm_source=product&utm_medium=forms_logo&utm_campaign=forms">
                            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg" alt="Google" height="24px" width="74px">
                            &nbsp;<span class="form">Forms</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center hidden" id="part_2">
            <div class="main-container">
                <div>
                    <div class="service">
                        Service Recipient:
                    </div>
                    <div class="service-revert">
                        <b>selected lab</b>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="sign radius-top radius-bottom pt-4">
                        Please sign name here.*<br>
                        <input type="text" class="input-sign" placeholder="Your answer" id="">
                    </div>
                </div>
                <div class="mt-4">
                    <div class="sign radius-top radius-bottom">
                        Please select date here.*<br>
                        <p class="date">Date</p>
                        <input type="date" class="input-date" placeholder="mm/dd/yyyy" id="">
                    </div>
                </div>
                <div class="btn-group mt-2">
                    <div class="group">
                        <div>
                            <button class="next-btn">Back</button>
                            <button class="submit-btn">Submit</button>
                        </div>
                        <button type="button" class="btn-clear">Clear form</button>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="sub-letter">Never submit passwords through Google Forms.</div>
                    <div class="sub-letter text-center text-center">Never submit passwords through Google Forms.
                        <a href="">Report Abuse</a>-
                        <a href="">Terms of Service</a>-
                        <a href="">Privacy Policy</a>
                    </div>
                    <div class="sub-title">
                        <a href="https://www.google.com/forms/about/?utm_source=product&utm_medium=forms_logo&utm_campaign=forms">
                            <img class="g-img" src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg" alt="Google" height="24px" width="74px">
                            &nbsp;<span class="form">Forms</span>
                        </a>
                    </div>
                </div>
            <div>
        </div>
    </div>
    
@endsection


@section('js')
    <script>
        function visiblehidden() {
            let visible = document.getElementById("part_1");
            let hidden = document.getElementById("part_2");
            
            visible.setAttribute("class","hidden");
            hidden.setAttribute("class","visible");
        }
    </script>

@endsection
