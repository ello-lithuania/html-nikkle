<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[28px] ml-[16px] md:ml-0 mt-[1rem]">External payment recipients</h2> 

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">

            <div class="grid grid-cols-12 gap-[15px]">
                <div class="col-span-12 md:col-span-3 flex flex-wrap md:block">
                    <button data-showid="tab1" class="text-[#003F6C] active-tab-btn tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Personal information</button>
                    <button data-showid="tab2" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Employment details</button>
                    <button data-showid="tab3" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Banking details</button>
                    <button data-showid="tab4" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Benefits</button>
                    <button data-showid="tab6" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Benefits 2</button>
                    <button data-showid="tab5" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Deduction</button>
                </div>
                <div class="col-span-12 md:col-span-9">
                    <div class="md:w-8/12">

                    <div id="tab1">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Personal Information</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">First name*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Last name*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Phone number</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Home address</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#A9AFB5] outline-0 mb-[15px]" placeholder="Street address"/>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#A9AFB5] outline-0 mb-[15px]" placeholder="City"/>
                                
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Date of birth</label>
                            <div>
                                <div class="relative">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg class="mr-[13px]" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.60509 16.535C1.24094 16.535 0.925162 16.4013 0.657763 16.1339C0.390378 15.8665 0.256685 15.5507 0.256685 15.1866V3.00092C0.256685 2.63548 0.390378 2.31859 0.657763 2.05027C0.925162 1.78193 1.24094 1.64777 1.60509 1.64777H2.84896V0.460266H4.21587V1.64777H10.7841V0.460266H12.151V1.64777H13.3949C13.7604 1.64777 14.0772 1.78193 14.3456 2.05027C14.6139 2.31859 14.7481 2.63548 14.7481 3.00092V15.1866C14.7481 15.5507 14.6139 15.8665 14.3456 16.1339C14.0772 16.4013 13.7604 16.535 13.3949 16.535H1.60509ZM1.60509 15.1866H13.3949V6.71875H1.60509V15.1866ZM1.60509 5.53125H13.3949V3.00092H1.60509V5.53125ZM7.50049 10.1117C7.26829 10.1117 7.07348 10.0332 6.91607 9.87611C6.75864 9.71902 6.67993 9.52437 6.67993 9.29216C6.67993 9.05995 6.75847 8.86514 6.91555 8.70773C7.07264 8.55031 7.2673 8.4716 7.49951 8.4716C7.73171 8.4716 7.92652 8.55014 8.08393 8.70722C8.24136 8.86431 8.32007 9.05896 8.32007 9.29117C8.32007 9.52338 8.24153 9.71819 8.08445 9.8756C7.92735 10.033 7.7327 10.1117 7.50049 10.1117ZM4.33383 10.1117C4.10162 10.1117 3.90681 10.0332 3.7494 9.87611C3.59198 9.71902 3.51327 9.52437 3.51327 9.29216C3.51327 9.05995 3.59181 8.86514 3.74889 8.70773C3.90598 8.55031 4.10063 8.4716 4.33284 8.4716C4.56505 8.4716 4.75986 8.55014 4.91727 8.70722C5.07469 8.86431 5.1534 9.05896 5.1534 9.29117C5.1534 9.52338 5.07486 9.71819 4.91778 9.8756C4.76069 10.033 4.56604 10.1117 4.33383 10.1117ZM10.6672 10.1117C10.4394 10.1117 10.2457 10.0332 10.086 9.87611C9.92641 9.71902 9.8466 9.52437 9.8466 9.29216C9.8466 9.05995 9.92625 8.86514 10.0855 8.70773C10.2448 8.55031 10.4392 8.4716 10.6685 8.4716C10.8979 8.4716 11.0916 8.55014 11.2497 8.70722C11.4077 8.86431 11.4867 9.05896 11.4867 9.29117C11.4867 9.52338 11.4082 9.71819 11.2511 9.8756C11.094 10.033 10.8994 10.1117 10.6672 10.1117ZM7.50049 13.2784C7.26829 13.2784 7.07348 13.1988 6.91607 13.0395C6.75864 12.8802 6.67993 12.6858 6.67993 12.4565C6.67993 12.2271 6.75847 12.0334 6.91555 11.8753C7.07264 11.7173 7.2673 11.6383 7.49951 11.6383C7.73171 11.6383 7.92652 11.7168 8.08393 11.8739C8.24136 12.031 8.32007 12.2256 8.32007 12.4578C8.32007 12.6856 8.24153 12.8793 8.08445 13.039C7.92735 13.1986 7.7327 13.2784 7.50049 13.2784ZM4.33383 13.2784C4.10162 13.2784 3.90681 13.1988 3.7494 13.0395C3.59198 12.8802 3.51327 12.6858 3.51327 12.4565C3.51327 12.2271 3.59181 12.0334 3.74889 11.8753C3.90598 11.7173 4.10063 11.6383 4.33284 11.6383C4.56505 11.6383 4.75986 11.7168 4.91727 11.8739C5.07469 12.031 5.1534 12.2256 5.1534 12.4578C5.1534 12.6856 5.07486 12.8793 4.91778 13.039C4.76069 13.1986 4.56604 13.2784 4.33383 13.2784ZM10.6672 13.2784C10.4394 13.2784 10.2457 13.1988 10.086 13.0395C9.92641 12.8802 9.8466 12.6858 9.8466 12.4565C9.8466 12.2271 9.92625 12.0334 10.0855 11.8753C10.2448 11.7173 10.4392 11.6383 10.6685 11.6383C10.8979 11.6383 11.0916 11.7168 11.2497 11.8739C11.4077 12.031 11.4867 12.2256 11.4867 12.4578C11.4867 12.6856 11.4082 12.8793 11.2511 13.039C11.094 13.1986 10.8994 13.2784 10.6672 13.2784Z" fill="#0D7AFF"></path>
                                    </svg>
                                </div>
                                <input value="01/01/2018 - 01/08/2018" type="text" name="daterange" class="w-full input-datepicker input-datepicker-right text-[14px] md:text-[18px] leading-[18px] md:leading-[28px] bg-transparent outline-0 border border-[#D9D9D9] rounded-[10px] inline-block py-[7px] px-[13px] pl-[40px]" placeholder="Select date">
                                </div>
                            </div>
                        </div>

                        <div class="mb-[48px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Email</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] next-tab-btn w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Next</button>
                        </div>
                    </div>

                    <div id="tab2" class="hidden">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Emploement details</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Position/job title</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Department</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Monthly base salary</label>
                            <input type="number" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Date of hire</label>
                            <div>
                                <div class="relative">
                                <div class="absolute inset-y-0 left-[12px] flex items-center pointer-events-none">
                                    <svg class="mr-[13px]" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.60509 16.535C1.24094 16.535 0.925162 16.4013 0.657763 16.1339C0.390378 15.8665 0.256685 15.5507 0.256685 15.1866V3.00092C0.256685 2.63548 0.390378 2.31859 0.657763 2.05027C0.925162 1.78193 1.24094 1.64777 1.60509 1.64777H2.84896V0.460266H4.21587V1.64777H10.7841V0.460266H12.151V1.64777H13.3949C13.7604 1.64777 14.0772 1.78193 14.3456 2.05027C14.6139 2.31859 14.7481 2.63548 14.7481 3.00092V15.1866C14.7481 15.5507 14.6139 15.8665 14.3456 16.1339C14.0772 16.4013 13.7604 16.535 13.3949 16.535H1.60509ZM1.60509 15.1866H13.3949V6.71875H1.60509V15.1866ZM1.60509 5.53125H13.3949V3.00092H1.60509V5.53125ZM7.50049 10.1117C7.26829 10.1117 7.07348 10.0332 6.91607 9.87611C6.75864 9.71902 6.67993 9.52437 6.67993 9.29216C6.67993 9.05995 6.75847 8.86514 6.91555 8.70773C7.07264 8.55031 7.2673 8.4716 7.49951 8.4716C7.73171 8.4716 7.92652 8.55014 8.08393 8.70722C8.24136 8.86431 8.32007 9.05896 8.32007 9.29117C8.32007 9.52338 8.24153 9.71819 8.08445 9.8756C7.92735 10.033 7.7327 10.1117 7.50049 10.1117ZM4.33383 10.1117C4.10162 10.1117 3.90681 10.0332 3.7494 9.87611C3.59198 9.71902 3.51327 9.52437 3.51327 9.29216C3.51327 9.05995 3.59181 8.86514 3.74889 8.70773C3.90598 8.55031 4.10063 8.4716 4.33284 8.4716C4.56505 8.4716 4.75986 8.55014 4.91727 8.70722C5.07469 8.86431 5.1534 9.05896 5.1534 9.29117C5.1534 9.52338 5.07486 9.71819 4.91778 9.8756C4.76069 10.033 4.56604 10.1117 4.33383 10.1117ZM10.6672 10.1117C10.4394 10.1117 10.2457 10.0332 10.086 9.87611C9.92641 9.71902 9.8466 9.52437 9.8466 9.29216C9.8466 9.05995 9.92625 8.86514 10.0855 8.70773C10.2448 8.55031 10.4392 8.4716 10.6685 8.4716C10.8979 8.4716 11.0916 8.55014 11.2497 8.70722C11.4077 8.86431 11.4867 9.05896 11.4867 9.29117C11.4867 9.52338 11.4082 9.71819 11.2511 9.8756C11.094 10.033 10.8994 10.1117 10.6672 10.1117ZM7.50049 13.2784C7.26829 13.2784 7.07348 13.1988 6.91607 13.0395C6.75864 12.8802 6.67993 12.6858 6.67993 12.4565C6.67993 12.2271 6.75847 12.0334 6.91555 11.8753C7.07264 11.7173 7.2673 11.6383 7.49951 11.6383C7.73171 11.6383 7.92652 11.7168 8.08393 11.8739C8.24136 12.031 8.32007 12.2256 8.32007 12.4578C8.32007 12.6856 8.24153 12.8793 8.08445 13.039C7.92735 13.1986 7.7327 13.2784 7.50049 13.2784ZM4.33383 13.2784C4.10162 13.2784 3.90681 13.1988 3.7494 13.0395C3.59198 12.8802 3.51327 12.6858 3.51327 12.4565C3.51327 12.2271 3.59181 12.0334 3.74889 11.8753C3.90598 11.7173 4.10063 11.6383 4.33284 11.6383C4.56505 11.6383 4.75986 11.7168 4.91727 11.8739C5.07469 12.031 5.1534 12.2256 5.1534 12.4578C5.1534 12.6856 5.07486 12.8793 4.91778 13.039C4.76069 13.1986 4.56604 13.2784 4.33383 13.2784ZM10.6672 13.2784C10.4394 13.2784 10.2457 13.1988 10.086 13.0395C9.92641 12.8802 9.8466 12.6858 9.8466 12.4565C9.8466 12.2271 9.92625 12.0334 10.0855 11.8753C10.2448 11.7173 10.4392 11.6383 10.6685 11.6383C10.8979 11.6383 11.0916 11.7168 11.2497 11.8739C11.4077 12.031 11.4867 12.2256 11.4867 12.4578C11.4867 12.6856 11.4082 12.8793 11.2511 13.039C11.094 13.1986 10.8994 13.2784 10.6672 13.2784Z" fill="#0D7AFF"></path>
                                    </svg>
                                </div>
                                <input value="01/01/2018 - 01/08/2018" type="text" name="daterange" class="w-full input-datepicker input-datepicker-right text-[14px] md:text-[18px] leading-[18px] md:leading-[28px] bg-transparent outline-0 border border-[#D9D9D9] rounded-[10px] inline-block py-[7px] px-[13px] pl-[40px]" placeholder="Select date">
                                </div>
                            </div>
                        </div>

                        <div class="mb-[50px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Social security number</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] next-tab-btn w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px] mr-[28px]">Next</button>
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab3" class="hidden">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Banking Details</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[50px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] next-tab-btn w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px] mr-[28px]">Next</button>
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab4" class="hidden">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Benefits</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="flex justify-between mb-[31px]">
                            <form class="w-full md:w-auto bg-white py-[11px] px-[17px] flex items-center overflow-hidden rounded-[10px] md:min-w-[268px]">
                                <input placeholder="Search..." class="placeholder:text-[#A9AFB5] color-black text-[16px] leading-[24px] outline-0 flex-grow pr-[10px]">
                                <button><img src="./img/icon-search-blue.svg"></button>
                            </form>

                            <a href="./customer_new.php" class="w-full md:w-auto justify-center md:justify-start md:mt-0 whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Create new
                            </a>
                        </div>

                        <div class="grid grid-cols-2 items-center py-[6px] mb-[20px] px-[17px] md:grid bg-silver-light rounded-[10px]">
                            <div class="col-span-1">
                                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">name</p>
                            </div>
                            <div class="col-span-1 text-right">
                                <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase mr-[10px]">Actions</p> 
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] items-center py-[6px]">
                            <div class="col-span-6 ">
                                <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">Benefit A</p>
                            </div>
                            <div class="col-span-6 relative flex items-center justify-end">

                            <span class="text-[#54BE5F] bg-[#D7EFDD] font-semibold text-[11px] leading-[16.5px] flex justify-center items-center px-[22px] py-[4px] rounded-[20px] mr-[16px]">Active</span>

                            <a href="./customer_new.php" class="mr-[16px] min-w-[115px] w-fit justify-center md:mt-0 whitespace-nowrap montserrat flex items-center py-[11.5px] px-[14px] rounded-[10px] bg-[#0D7AFF]  hover:bg-[#002743]  text-white font-semibold text-[14px] leading-[17px]">
                                Unassign
                            </a>

                                            <div class="md:flex justify-end hidden">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        <div class="md:hidden flex justify-end">
                                        <button class="action-btn w-[40px] h-[40px] flex  items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                            <span class="dots-icon"></span>
                                        </button>
                                            <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                            <div class="flex">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            </div>  
                                        </div>   
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] my-[22px]"/>

                        <div class="grid grid-cols-12 gap-[15px] items-center py-[6px]">
                            <div class="col-span-6 ">
                                <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">Benefit A</p>
                            </div>
                            <div class="col-span-6 relative flex items-center justify-end">

                            <a href="./customer_new.php" class="mr-[16px] min-w-[115px] w-fit justify-center md:mt-0 whitespace-nowrap montserrat flex items-center py-[11.5px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                Assign
                            </a>

                                            <div class="md:flex justify-end hidden">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        <div class="md:hidden flex justify-end">
                                        <button class="action-btn w-[40px] h-[40px] flex  items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                            <span class="dots-icon"></span>
                                        </button>
                                            <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                            <div class="flex">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            </div>  
                                        </div>   
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] my-[22px]"/>

                        <div class="grid grid-cols-12 gap-[15px] items-center py-[6px]">
                            <div class="col-span-6 ">
                                <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">Benefit A</p>
                            </div>
                            <div class="col-span-6 relative flex items-center justify-end">

                            <a href="./customer_new.php" class="mr-[16px] min-w-[115px] w-fit justify-center md:mt-0 whitespace-nowrap montserrat flex items-center py-[11.5px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                Assign
                            </a>

                                            <div class="md:flex justify-end hidden">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        <div class="md:hidden flex justify-end">
                                        <button class="action-btn w-[40px] h-[40px] flex  items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                            <span class="dots-icon"></span>
                                        </button>
                                            <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                            <div class="flex">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            </div>  
                                        </div>   
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] my-[22px]"/>

                        <div class="grid grid-cols-12 gap-[15px] items-center py-[6px]">
                            <div class="col-span-6 ">
                                <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">Benefit A</p>
                            </div>
                            <div class="col-span-6 relative flex items-center justify-end">

                            <a href="./customer_new.php" class="mr-[16px] min-w-[115px] w-fit justify-center md:mt-0 whitespace-nowrap montserrat flex items-center py-[11.5px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                Assign
                            </a>

                                            <div class="md:flex justify-end hidden">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        <div class="md:hidden flex justify-end">
                                        <button class="action-btn w-[40px] h-[40px] flex  items-center justify-center rounded-[10px] hover:bg-[#408FEF]/10">
                                            <span class="dots-icon"></span>
                                        </button>
                                            <div class="action-btn-controls hidden absolute p-[15px] bg-white rounded-[10px] right-0 top-[3rem] button-shadow z-10">
                                            <div class="flex">
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] inline-flex items-center justify-center">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.2662 4.74903L12.251 1.7338L13.6844 0.300336C13.8949 0.100112 14.1573 0 14.4716 0C14.7858 0 15.0507 0.100112 15.2662 0.300336L16.6997 1.7338C16.8999 1.95953 17 2.22952 17 2.54376C17 2.85804 16.8999 3.1153 16.6997 3.31556L15.2662 4.74903ZM0 17V13.9848L10.3156 3.66918L13.3308 6.68436L3.01518 17H0Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                                <a href="./index.php" class="w-[40px] h-[40px] bg-[#408FEF]/10 hover:bg-[#408FEF]/20 rounded-[10px] ml-[15px] inline-flex items-center justify-center">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.94925 20C2.47867 20 2.07256 19.8314 1.73092 19.4942C1.38929 19.1569 1.21848 18.7561 1.21848 18.2915V2.17539H0.680762C0.487501 2.17539 0.325731 2.11057 0.195451 1.98092C0.0651502 1.85128 0 1.69031 0 1.49803C0 1.30572 0.0651502 1.14654 0.195451 1.02049C0.325731 0.894457 0.487501 0.83144 0.680762 0.83144H5.1323C5.1323 0.589977 5.21668 0.391038 5.38544 0.234622C5.55418 0.0782073 5.75826 0 5.99768 0H12.0023C12.2417 0 12.4458 0.0794906 12.6146 0.238472C12.7833 0.397454 12.8677 0.59511 12.8677 0.83144H17.3192C17.5125 0.83144 17.6743 0.896263 17.8045 1.02591C17.9348 1.15553 18 1.3165 18 1.50881C18 1.70111 17.9348 1.86028 17.8045 1.98631C17.6743 2.11236 17.5125 2.17539 17.3192 2.17539H16.7815V18.2915C16.7815 18.7561 16.6107 19.1569 16.2691 19.4942C15.9274 19.8314 15.5213 20 15.0507 20H2.94925ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H15.0507C15.1507 18.656 15.2373 18.6219 15.3104 18.5535C15.3835 18.4852 15.42 18.3979 15.42 18.2915V2.17539H2.57998ZM6.03695 15.4829C6.03695 15.6737 6.10261 15.8334 6.23393 15.962C6.36527 16.0906 6.52835 16.1549 6.72317 16.1549C6.91797 16.1549 7.07922 16.0906 7.20692 15.962C7.3346 15.8334 7.39844 15.6737 7.39844 15.4829V5.31889C7.39844 5.13552 7.33278 4.97769 7.20146 4.84538C7.07012 4.71307 6.90704 4.64691 6.71222 4.64691C6.51742 4.64691 6.35617 4.71307 6.22847 4.84538C6.10079 4.97769 6.03695 5.13552 6.03695 5.31889V15.4829ZM10.6016 15.4829C10.6016 15.6737 10.6672 15.8334 10.7985 15.962C10.9299 16.0906 11.093 16.1549 11.2878 16.1549C11.4826 16.1549 11.6438 16.0906 11.7715 15.962C11.8992 15.8334 11.963 15.6737 11.963 15.4829V5.31889C11.963 5.13552 11.8974 4.97769 11.7661 4.84538C11.6347 4.71307 11.4716 4.64691 11.2768 4.64691C11.082 4.64691 10.9208 4.71307 10.7931 4.84538C10.6654 4.97769 10.6016 5.13552 10.6016 5.31889V15.4829ZM2.57998 2.17539V18.2915C2.57998 18.3979 2.61652 18.4852 2.6896 18.5535C2.7627 18.6219 2.84925 18.656 2.94925 18.656H2.57998V2.17539Z" fill="#0D7AFF"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            </div>  
                                        </div>   
                            </div>
                        </div>

                    </div>

                    <div id="tab5" class="hidden">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Create new deduction</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Deduction label:</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Is this a recurring deduction</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Yes</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Amount</label>
                            <input type="number" placeholder="0" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient of funds</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Employer</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Employer Contribution:</label>
                            <input type="number" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Active</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Yes</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                            <a href="" class="w-full mb-[50px] whitespace-nowrap inline-flex items-center justify-center py-[19px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add another deduction
                            </a>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] next-tab-btn w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px] mr-[28px]">Next</button>
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab6" class="hidden">
                        <div class="flex justify-between items-center mb-[26px]">
                            <h3 class="text-[#003F6C] text-[24px] leading-[36px] font-semibold">Create New Benefit</h3>
                            <a href="" class="text-[#0D7AFF] montserrat text-[12px] leading-[14px] font-semibold">Back</a>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Benefit label</label>
                            <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Is this taxable</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Yes</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">What percentage is taxable</label>
                            <input type="number" placeholder="0" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Is this a recurring benefit</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Yes</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient of funds</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Employee</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Amount</label>
                            <input type="number" placeholder="0" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                        </div>

                        <div class="mb-[20px]">
                            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Active</label>
                            <div class="custom-select custom-select-full">
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>Yes</option>
                                <option value="US">No</option>
                                </select>
                            </div>
                        </div>

                            <a href="" class="w-full mb-[50px] whitespace-nowrap inline-flex items-center justify-center py-[19px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add another benefit
                            </a>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] next-tab-btn w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px] mr-[28px]">Next</button>
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>