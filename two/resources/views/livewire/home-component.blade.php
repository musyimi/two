@extends('base')

@section('content')

<div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{URL::asset('asset/nairobi.jpg')}}" class="d-block w-100" alt="" />
        </div>
        <div class="carousel-item">
          <img src="{{URL::asset('asset/wildix.jpg')}}" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{URL::asset('asset/case.jpg')}}" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <div class="global pt-lg-4 px-lg-4 pb-lg-4">
      <div class="global-container">
        <h1>Global Management, Local Expertise</h1>
      </div>
      <div>
        <p class="global-content">
          Cato Networks provides full-fledged telecommunication data services to
          any client in the African continent. Our expertise and agility allow
          us to deliver efficient and tailor-made solutions.
        </p>
      </div>

      <div>
        <p class="global-content">
          We operate 5 nodes across Africa, through which we deliver services
          with ease whether across challenging rural areas and developing
          markets or big cities and mature markets. Regardless of conditions,
          our service will always be guaranteed for reliability.
        </p>
      </div>
    </div>

    <div>
      <div class="global-container">
        <h1>Our Know-how At Your Command</h1>
      </div>
      <div>
        <p class="global-content">
          We offer Wide Area Network (WAN) services for global providers and
          carriers in Africa. Our WAN solutions include controlled
          implementation, on-schedule delivery for final users and 24/7
          technical support.
        </p>
      </div>
    </div>

    <div>
      <div class="picha">
        <div class="column">
          <p>
            Increase your revenue by offering high quality telecommunication
            services in your preferred region.
          </p>
        </div>
        <div class="column">
          <img src="{{ URL::asset('asset/cranes.jpg')}}" alt="" />
        </div>
        <div class="column">
          <p>
            Our connectivity spans through all urban and remote areas across the
            African continent.
          </p>
        </div>
        <div class="column">
          <img src="{{URL::asset('asset/helipad.jpg')}}" alt="" />
        </div>
      </div>
    </div>

    <div>
      <div class="picha">
        <div class="column">
          <img src="{{URL::asset('asset/site.jpg')}}" alt="" />
        </div>
        <div class="column">
          <p>
            Each project demands specific training, skills and procedures. We
            make sure everything is right in order to offer unmatched quality
            and service.
          </p>
        </div>
        <div class="column">
          <img src="{{URL::asset('asset/turbine.jpg')}}" alt="" />
        </div>
        <div class="column">
          <p>
            Our work builds upon experience and good relationships with local
            partners.
          </p>
        </div>
      </div>
    </div>

    <div class="global pt-lg-4 px-lg-4 pb-lg-4">
      <div class="global-container">
        <h1>We Make It Work</h1>
      </div>
      <div>
        <p class="global-content">
          Enjoy tailor-made solutions with our comprehensive service catalog.
          Through our infrastructure and partnerships we can reach all corners
          of Africa to provide the necessary tools for reliable and always-on
          connectivity. We offer field service with on-site interventions as
          well as support for Costumer Premises Equipment (CPE)
        </p>
      </div>
    </div>

    <div class="work">
      <div class="work-item">
        <p>Dedicated internet Access</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>Ethernet Connectivity</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>Ip Vpn multiprotocol label switching</p>
        <button>Read more</button>
      </div>
    </div>

    <div class="work">
      <div class="work-item">
        <p>Broadband Internet Access</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>Dedicated Cloud Connection</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>Hybrid Dynamic Networks</p>
        <button>Read more</button>
      </div>
    </div>

    <div class="work">
      <div class="work-item">
        <p>Wildix</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>customer premises equipment</p>
        <button>Read more</button>
      </div>
      <div class="work-item">
        <p>Fiel support</p>
        <button>Read more</button>
      </div>
    </div>

    <div class="pt-lg-4 px-lg-4 pb-lg-4">
      <div class="d-flex justify-content-center">
        <h1>State of the Art Connectivity</h1>
      </div>
      <div>
        <p>
          We operate in more than 45 countries with branches in Africa. Our
          clients work in several industries and we strive to offer the best
          solutions for every need. As part of our commitment to excellence we
          also offer 24/7 multilingual support.
        </p>
      </div>
    </div>

    <div>
      <div class="">
        <div class="row bg-warning p-lg-4">
          <div class="col fs-6">5 Nodes</div>
          <div class="col fs-6">+45 Countries</div>
          <div class="col fs-6">+16 Industries</div>
          <div class="col fs-6">7 Global Centers</div>
          <div class="col fs-6">+20 Years of Experience</div>
        </div>
      </div>
    </div>

    <div class="px-lg-4 bg-warning pb-lg-4">
      <div class="d-flex justify-content-center">
        <h1>INDUSTRIES WE SERVE</h1>
      </div>
      <div>
        <p>
          Aeronautics - Banking - Commerce - Engineering - Construction - Steel
          - Mining - Oil and Gas - Government - Multinational Tech Companies -
          Global Food Industry - Chemical - Agrochemical - Healthcare - Wood
          Pulp Industry - Consumer Goods Corporations.
        </p>
      </div>
    </div>

@endsection





