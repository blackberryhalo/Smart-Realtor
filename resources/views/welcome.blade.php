<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/img/6.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl mb-8 langBN">{{__('BOCHK Smart Realtor - your guide to the primary real estate market in Hong Kong.')}}</h2>
            <p class="text-2xl mt-8 langBN">{{ __('The most convenient real estate search portal in Hong Kong, start searching now!') }}</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                @include('components.property-search-form', ['locations' => $locations])
            </div>
        </div>
    </div>

    <div class="py-20 text-center">
        <div class="container">
            <h2 class="section-heading">{{ __('No worry about renting a house, escorted by smart contracts!') }}<br/> {{ __('Smart contracts are automated contracts based on blockchain technology that can execute contracts and transactions without intermediaries')}} <span class="underline">{{ __('Make renting easier!')}}</span></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">{{ __('The rental application combined with smart contracts can bring a more efficient and transparent rental experience to the rental market in Hong Kong, reduce disputes and intermediary fees, and improve the trust between tenants and landlords')}}</p>

            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">{{ __('Start Searching')}}</a>

            <h2 class="section-heading pt-14">中銀香港Smart Realto租賃，為您打造理想家園<br/> 為您提供舒適、安全的租賃環境 </h2>
            <div class="w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between mt-10">
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">高效、透明、便捷的租房體驗</h3>
                        <p class="text-xs text-center mx-auto w-4/6">結合智能合約的租房應用可以為香港的租房市場帶來更加高效和透明的租房體驗，減少糾紛和中介費用，提高租客和房東之間的信任度。
                        </p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">專業的租賃服務</h3>
                        <p class="text-xs text-center mx-auto w-4/6">中銀香港租賃平台擁有專業的租賃服務團隊，能夠提供全方位的租賃服務，包括房源推薦、簽約管理、租金催收等，為客戶提供便捷、快速的租賃體驗</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">高品質的物業管理</h3>
                        <p class="text-xs text-center mx-auto w-4/6">中銀香港租賃平台的物業管理團隊擁有豐富的經驗和專業知識，能夠提供優質的物業管理服務，確保客戶居住和工作的環境舒適、安全。</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">多元化的租賃選擇</h3>
                        <p class="text-xs text-center mx-auto w-4/6">中銀香港租賃平台提供各種類型的租賃選擇，包括公寓、別墅、寫字樓、商鋪等，以及不同面積和裝修風格的物業，能夠滿足不同客戶的需求.</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">金融服務支持</h3>
                        <p class="text-xs text-center mx-auto w-4/6">中銀香港租賃平台能夠提供與金融服務相關的支持，例如提供房屋按揭和保險等服務，為客戶提供更加全面的租賃解決方案。</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">品牌信譽保障</h3>
                        <p class="text-xs text-center mx-auto w-4/6">中銀香港租賃平台擁有雄厚的背景和良好的品牌信譽，能夠為客戶提供可靠的租賃服務，讓客戶放心、滿意。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container text-center pt-14">
        <h2 class="section-heading">{{ __('更多有關信息') }}</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
             style="background-image: url(/img/6.jpg)">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a href="" class="text-white text-xl flex flex-col justify-center items-center"><span class="border-2 border-white w-12 h-12 text-center pt-1 pl-1 leading-10 text-2xl hover:border-yellow-500 duration-200 rounded-full mb-2"><i class="fa fa-play"></i></span>{{ __('Watch the video') }}</a>
            </div>
        </div>

        <div class="text-xl">
            <p>中銀香港租賃平台覆蓋香港特別行政區內的多個區域，包括但不限於中西區、灣仔區、東區、南區、油尖旺區、深水埗區、九龍城區、觀塘區、荃灣區、屯門區、元朗區、北區、大埔區、沙田區、西貢區和離島區等。我們的房源種類繁多，包括公寓、別墅、寫字樓、商鋪等，能夠滿足不同客戶的需求。如果您有特定的需求，可以聯繫我們的租賃服務團隊，我們將盡力為您提供滿意的房源和服務。</p>

        </div>
    </div>


    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
                <p>中國銀行（香港）有限公司（「中銀香港」）是一家在香港註冊的持牌銀行。2001年，中銀集團重組其在香港的機構，合併了原香港中銀集團十二行中十家銀行的業務，並同時持有香港註冊的南洋商業銀行（「南商」）、集友銀行（「集友」）和中銀信用卡（國際）有限公司的股份權益，使之成為中銀香港的附屬機構。為貫徹中國銀行集團的海外發展策略，中銀香港分別於2016年5月及2017年3月完成出售其持有的南商及集友的全部股權，同時積極完善區域化佈局，深入推進東南亞業務發展，分支機構遍及泰國、馬來西亞、越南、菲律賓、印度尼西亞、柬埔寨、老撾、文萊及緬甸，為當地客戶提供專業優質的金融服務。</p>   
                <p>中銀香港是香港三家發鈔銀行之一，亦是香港唯一的人民幣業務清算行，在各主要業務市場位居前列。憑藉在人民幣業務方面的優勢，中銀香港的人民幣服務成為客戶的當然選擇。我們在香港透過最龐大的分行網絡及多元化的服務渠道，以及網上銀行和手機銀行等高效電子渠道，為個人、各類企業和機構等客戶提供全面的金融及投資理財服務。透過與母行中國銀行的緊密聯動，我們為跨國公司、跨境客戶、內地「走出去」企業，以及各地央行和超主權機構客戶提供全方位及優質的跨境服務。</p>
                
                <p>中銀香港的控股公司中銀香港（控股）有限公司於2001年9月12日在香港註冊成立，並於2002年7月25日在香港聯合交易所主板上市，是香港最大上市公司及商業銀行集團之一，股份代號「2388」，美國預託證券場外交易代碼「BHKLY」。</p>
                    </p>
            </div>
            <div class="flex-1 ml-10">
                <img class="rounded" src="/img/3.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn">根據篩選條件查找</a>
            <p class="mx-10">or</p>
            <a href="" class="btn-outline">根據地圖查找</a>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">{{ __('Last added properties') }}</h2>
        <div class="flex flex-wrap -mx-2 mt-10">

            @foreach($latest_properties as $property)
                @include('components.single-property-card', ['property' => $property, 'width' => 'w-1/4'])
            @endforeach


        </div>
    </div>

</x-guest-layout>
