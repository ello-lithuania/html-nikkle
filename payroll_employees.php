<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[28px] ml-[16px] md:ml-0 mt-[1rem]">Employees</h2> 

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">
            <div class="flex flex-wrap md:no-wrap justify-between items-center mb-[23px] rounded-[10px] flex-col-reverse md:flex-row">
                            <form class="w-full md:w-auto bg-white py-[11px] px-[17px] flex items-center overflow-hidden rounded-[10px] md:min-w-[268px]">
                                <input placeholder="Search employess..." class="placeholder:text-[#A9AFB5] color-black text-[16px] leading-[24px] outline-0 flex-grow pr-[10px]"/>
                                <button><img src="./img/icon-search-blue.svg"/></button>
                            </form>
                            <a href="" class="justify-center md:justify-start w-full md:w-auto mb-[28px] md:mb-0 whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add Employee
                            </a>      
            </div>

            <div class="grid grid-cols-2 gap-[15px] items-center py-[14px] px-[17px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-1">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Name</p>
                </div>
                <div class="col-span-1 text-right">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mr-[6px]">Status</p> 
                </div>
            </div>

            <div class="grid grid-cols-12 md:grid-cols-2 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-6 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                </div>
                <div class="col-span-6 md:col-span-1 text-right">
                <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[23px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-end">Status</p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-2 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-6 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                </div>
                <div class="col-span-6 md:col-span-1 text-right">
                <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[23px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-end">Status</p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-2 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-6 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                </div>
                <div class="col-span-6 md:col-span-1 text-right">
                <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[23px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-end">Status</p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-2 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-6 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                </div>
                <div class="col-span-6 md:col-span-1 text-right">
                <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[23px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-end">Status</p>
                </div>
            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 md:grid-cols-2 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-6 md:col-span-1">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] m-0 font-semibold">Abhinav Test</p>
                </div>
                <div class="col-span-6 md:col-span-1 text-right">
                <p class="text-[#3E3E3E] montsserrat text-[14px] leading-[21px] px-[23px] py-[5px] bg-[#DCDBFA80]/50 rounded-[20px] inline-flex items-center justify-end">Status</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>