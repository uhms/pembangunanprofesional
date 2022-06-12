<?php
include "header.php";
?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Permohonan Cuti Belajar</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Stepper-->
			<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-350px me-9">
					<!--begin::Wrapper-->
					<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
						<!--begin::Nav-->
						<div class="stepper-nav">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">1</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Maklumat Peribadi</h3>
									<div class="stepper-desc fw-bold">Setup Your Account Details</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav" data-toggle="tab" href="#tabb2">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">2</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Maklumat Keluarga</h3>
									<div class="stepper-desc fw-bold">Setup Your Account Settings</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">3</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Maklumat Perkhidmatan</h3>
									<div class="stepper-desc fw-bold">Your Business Related Info</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">4</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Kelulusan Akademik</h3>
									<div class="stepper-desc fw-bold">Set Your Payment Methods</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">5</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Maklmat Program</h3>
									<div class="stepper-desc fw-bold">Set Your Payment Methods</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">6</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Pemohon</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">7</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Pengarah /</div>
									<div class="stepper-desc fw-bold">Pengerusi / Ketua Jabatan</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">8</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Timbalan </div>
									<div class="stepper-desc fw-bold">Dekan PIPA / Naib</div>
									<div class="stepper-desc fw-bold">Pengerusi Sekolah /</div>
									<div class="stepper-desc fw-bold">Ketua Bahagian</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">9</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Timbalan </div>
									<div class="stepper-desc fw-bold">Pendaftar / Penolong</div>
									<div class="stepper-desc fw-bold">Pendaftar PSM PTJ </div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">10</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Dekan /</div>
									<div class="stepper-desc fw-bold">Ketua PTJ</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">11</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Perakuan</h3>
									<div class="stepper-desc fw-bold">Perakuan Urus Setia </div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="card d-flex flex-row-fluid flex-center">
					<!--begin::Form-->
					<form class="card-body py-20 w-100 w-xl-800px px-9" novalidate="novalidate" id="kt_create_account_form">
						<!--begin::Step 1-->
						<div class="current" data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bolder d-flex align-items-center text-dark">Maklumat Peribadi
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">No Pekerja</label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="d-flex align-items-center">
										<!--begin::Input group-->
										<div class="position-relative w-md-200px me-md-2">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" class="form-control form-control-solid ps-10" name="search"/>
										</div>
										<!--end::Input group-->
										<!--begin:Action-->
										<div class="d-flex align-items-center">
											<button type="submit" class="btn btn-primary me-5">Carian</button>
										</div>
										<!--end:Action-->
									</div>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">Nama</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="nama_pemohon" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">No Kad Pengenalan</label>
										<input name="no_kad_pengenalan_pemohon" class="form-control form-control-lg form-control-solid"/>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">No Pekerja</label>
										<input name="no_pekerja" class="form-control form-control-lg form-control-solid"/>
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-3">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label">
										<span class="required">Alamat Rumah</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="alamat_rumah_1" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-3">
									<!--begin::Input-->
									<input name="alamat_rumah_2" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Input-->
									<input name="alamat_rumah_3" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-3">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label">
										<span class="required">Alamat Tetap</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="alamat_tetap_1" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-3">
									<!--begin::Input-->
									<input name="alamat_tetap_2" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Input-->
									<input name="alamat_tetap_3" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Email Rasmi</label>
										<input name="email_rasmi" class="form-control form-control-lg form-control-solid"/>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Email Kedua</label>
										<input name="email_kedua" class="form-control form-control-lg form-control-solid"/>
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">No Telefon</label>
										<input name="no_tel_pemohon" class="form-control form-control-lg form-control-solid"/>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Umur</label>
										<input name="umur" class="form-control form-control-lg form-control-solid" />
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Agama</label>
										<input name="agama" class="form-control form-control-lg form-control-solid" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="fs-6 fw-bold mb-2">No. Cukai Pendapatan</label>
										<input name="no_cukai" class="form-control form-control-lg form-control-solid" />
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-stack mb-8">
									<!--begin::Label-->
									<div class="me-5">
										<label class="required fs-6 fw-bold">Pemegang Mana-mana Biasiswa</label>
									</div>
									<!--end::Label-->
									<!--begin::Switch-->
									<label class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										<span class="form-check-label fw-bold text-muted">Ya</span>
									</label>
									<!--end::Switch-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">Nama Penaja</label>
									<!--end::Label-->
									<input name="nama_penaja" class="form-control form-control-lg form-control-solid"/>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--end::Label-->
									<label class="form-label">Alamat Penaja</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea name="alamat_penaja" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Maklumat Keluarga</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-3">Nama Pasangan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-lg form-control-solid" name="nama_pasangan" placeholder="" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-8 fv-row">
										<label class="required fs-6 fw-bold mb-2">No. Kad Pengenalan</label>
										<input name="no_kad_pengenalan" class="form-control form-control-lg form-control-solid" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<label class="fs-6 fw-bold mb-2">No. Telefon</label>
										<input name="no_telefon_pasangan" class="form-control form-control-lg form-control-solid" />
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-stack mb-8">
									<!--begin::Label-->
									<div class="me-5">
										<label class="required fs-6 fw-bold">Pasangan Bekerja</label>
									</div>
									<!--end::Label-->
									<!--begin::Switch-->
									<label class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										<span class="form-check-label fw-bold text-muted">Ya</span>
									</label>
									<!--end::Switch-->
								</div>
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-3">Pekerjaan Pasangan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-lg form-control-solid" name="pekerjaan_pasangan" placeholder="" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-3">Nama Majikan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-lg form-control-solid" name="nama_majikan" placeholder="" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label mb-3">Alamat Majikan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Tables Widget 13-->
								<div class="card mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Senarai Anak</span>
											<span class="text-muted mt-1 fw-bold fs-7">Di Bawah Umur 13 Tahun Yang Akan Menyertai Pemohonan</span>
										</h3>
										<div class="card-toolbar">
											<!--begin::Menu-->
											<a href="#" class="btn btn-success er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#modal_tbh_anak">
											<i class="fas fa-plus-circle"></i>Tambah</a>
											<!--end::Menu-->
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="min-w-10px">Bil</th>
														<th class="min-w-140px">Nama Anak</th>
														<th class="min-w-120px">Tarikh Lahir</th>
														<th class="min-w-120px">Umur</th>
														<th class="min-w-100px text-end">Tindakan</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">1</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Nur Alia Binti Mohd</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">12 Tahun</a>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">2</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Mohd Ali Bin Mohd</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">04/18/2021</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">6 Tahun</a>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								</div>
								<!--end::Tables Widget 13-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-12">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Maklumat Perkhidmatan</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please check out
									<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold mb-2">Jawatan Sekarang</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="jawatan_sekarang" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label">
										<span class="required fs-6 fw-bold mb-2">Jabatan/Fakulti</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="jabatan_fakulti" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Mula Berkhidmat</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_mula_berkhidmat" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Masuk UTM</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_masuk_utm" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Lantikan Terkini</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_lantikan_terkini" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Sah Jawatan</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_sah_jawatan" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-2">
									<!--begin::Label-->
									<label class="d-flex align-items-center form-label">
										<span class="fs-6 fw-bold mb-2">Tarikh Menghadiri Kursus Kaedah Penyelidikan</span>
									</label>
									<!--end::Label-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Mula</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_mula" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Tamat</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_akhir" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 3-->
						<!--begin::Step 4-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Kelulusan Akademik</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please check out
									<a href="#" class="text-primary fw-bolder">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Tables Widget 13-->
								<div class="card mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Senarai Institusi Pengajian</span>
											<span class="text-muted mt-1 fw-bold fs-7">Diploma, Sarjana Muda, Sarjana dan lain-lain</span>
										</h3>
										<div class="card-toolbar">
											<!--begin::Menu-->
											<a href="#" class="btn btn-success er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#modal_tbh_institusi">
											<i class="fas fa-plus-circle"></i>Tambah</a>
											<!--end::Menu-->
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="min-w-10px">Bil</th>
														<th class="min-w-140px">Institusi</th>
														<th class="min-w-120px">Tahap</th>
														<th class="min-w-120px">Tahun</th>
														<th class="min-w-120px">Bidang</th>
														<th class="min-w-120px">CGPA</th>
														<th class="min-w-100px text-end">Tindakan</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">1</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Universiti Teknikal Malaysia Melaka</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Diploma</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">2016</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Sains Komputer</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">3.38</a>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">2</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Universiti Teknologi Mara</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Sarjana Muda</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">2018</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Pengurusan Pangkalan Data</a>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">3.18</a>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								</div>
								<!--end::Tables Widget 13-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 4-->
						<!--begin::Step 4-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Maklumat Program</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please check out
									<a href="#" class="text-primary fw-bolder">Help Page</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Heading-->
									<div class="mb-3">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold">
											<span class="required">Peringkat Pengajian</span>
										</label>
										<!--end::Label-->
									</div>
									<!--end::Heading-->
									<!--begin::Row-->
									<div class="fv-row">
										<!--begin::Radio group-->
										<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="pringkat_pengajian" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Diploma</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="pringkat_pengajian" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Sarjana Muda</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="pringkat_pengajian" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Sarjana</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="pringkat_pengajian" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Ijazah Doktor Falsafah</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label required">Bidang</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input name="bidang" class="form-control form-control-lg form-control-solid"/>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Heading-->
									<div class="mb-3">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold">
											<span class="required">Tarap Program</span>
										</label>
										<!--end::Label-->
									</div>
									<!--end::Heading-->
									<!--begin::Row-->
									<div class="fv-row">
										<!--begin::Radio group-->
										<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="tahap_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Profesional</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="tahap_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Bukan Profesional</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="tahap_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Tidak Berkaitan</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-8 fv-row">
										<label class="required fs-6 fw-bold mb-2">Nama Universiti</label>
										<input name="nama_universiti" class="form-control form-control-lg form-control-solid" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<label class="fs-6 fw-bold mb-2">Negara</label>
										<input name="negara" class="form-control form-control-lg form-control-solid" />
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Heading-->
									<div class="mb-3">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold">
											<span class="required">Jenis Program</span>
										</label>
										<!--end::Label-->
									</div>
									<!--end::Heading-->
									<!--begin::Row-->
									<div class="fv-row">
										<!--begin::Radio group-->
										<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="jenis_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Kerja Kursus</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="jenis_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Penyelidikan</span>
												</span>
												<!--end::Info-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
												<!--begin::Radio-->
												<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
													<input class="form-check-input" type="radio" name="jenis_program" value="2" />
												</span>
												<!--end::Radio-->
												<!--begin::Info-->
												<span class="ms-5">
													<span class="fs-6 fw-bolder text-gray-800 d-block">Kerja Kursus & Penyelidikan</span>
												</span>
												<!--end::Info-->
											</label>
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Yuran Pengajian Setahun/Semester</label>
										<input name="no_kad_pengenalan" class="form-control form-control-lg form-control-solid" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="fs-6 fw-bold mb-2">Kedudukan (Rangking) Universiti</label>
										<input name="no_telefon_pasangan" class="form-control form-control-lg form-control-solid" />
									</div>
								<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<!--begin::Label-->
											<label class="fs-5 fw-bold">Sama ada kursus ini memerlukan pungutan data di Malaysia</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div class="fs-7 fw-bold text-muted">Sekiranya Pengajian Di Luar Negara</div>
											<!--end::Input-->
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="billing" type="checkbox" value="1"/>
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-bold text-muted">Ya</span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
									<!--begin::Wrapper-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-8">
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<label class="required fs-6 fw-bold mb-2">Tarikh Pendaftar</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_lantikan_terkini" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<label class="fs-6 fw-bold mb-2">Tarikh Mula Pengajian</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_lantikan_terkini" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<label class="fs-6 fw-bold mb-2">Tarikh Tamat Pengajian</label>
										<!--begin::Input-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="tarikh_lantikan_terkini" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 4-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Pemohon</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack">
											<!--begin::Switch-->
											<label class="form-check form-check-custom form-check-solid me-10">
												<!--begin::Input-->
												<input class="form-check-input" name="billing" type="checkbox" value="1"/>
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label fw-bold text-muted"></span>
												<!--end::Label-->
											</label>
											<!--end::Switch-->
											<!--begin::Label-->
											<div class="me-5">
												<!--begin::Label-->
												<label class="fs-5 fw-bold">
													SAYA MENGAKU BAHAWA SEMUA KETERANGAN YANG DIBERI ADALAH BENAR, 
													SEKIRANYA KENYATAAN YANG DIBERIKAN TIDAK BENAR ATAU PALSU, 
													UNIVERSITI TEKNOLOGI MALAYSIA BERHAK MEMBATALKAN PERMOHONAN CUTI BELAJAR INI.
												</label>
												<!--end::Label-->
											</div>
											<!--end::Label-->
										</div>
										<!--begin::Wrapper-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Perakuan Pengarah / Pengerusi / Ketua Jabatan</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-20">
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Program yang dipohon sesuai dengan keperluan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Bolehkah pemohon dilepaskan daripada tugasnya dengan tidak menjejaskan perjalanan kuliah/tugas jabatan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Adakah pemohon dijangka mampu menamatkan program yang dipohon dengan jayanya?
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Persediaan fakulti/sekolah bagi mengambil alih tugas pemohon semasa mengikuti program
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan berhubung tempoh Cuti Belajar yang dipohon</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan/sookongan terhadap penyelidikan (bagi program yang diikuti secara penyelidikan)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan lain (jika ada)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="fw-bold me-5">
													<label class="fs-6">Permohonan</label>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="email" checked="checked" />
														<span class="form-check-label fw-bold">Disokong</span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="phone" />
														<span class="form-check-label fw-bold">Tidak Disokong</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Timbalan Dekan / Naib Pengerusi Sekolah / Ketua Bahagian</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-20">
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Program yang dipohon sesuai dengan keperluan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Bolehkah pemohon dilepaskan daripada tugasnya dengan tidak menjejaskan perjalanan kuliah/tugas jabatan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Adakah pemohon dijangka mampu menamatkan program yang dipohon dengan jayanya?
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Persediaan fakulti/sekolah bagi mengambil alih tugas pemohon semasa mengikuti program
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan berhubung tempoh Cuti Belajar yang dipohon</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan/sookongan terhadap penyelidikan (bagi program yang diikuti secara penyelidikan)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan lain (jika ada)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="fw-bold me-5">
													<label class="fs-6">Permohonan</label>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="email" checked="checked" />
														<span class="form-check-label fw-bold">Disokong</span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="phone" />
														<span class="form-check-label fw-bold">Tidak Disokong</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Timbalan Pendaftar / Penolong Pendaftar PSM PTJ</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-20">
										<!--begin::Input group-->
										<div class="row g-9 mb-5">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Kelayakan Bahasa Ingris (TOFL/IELTS)
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-6 fv-row">
												<!--begin::Input group-->
												<div class="fv-row mb-5">
													<!--begin::Dropzone-->
													<div class="dropzone" id="kt_modal_create_project_files_upload">
														<!--begin::Message-->
														<div class="dz-message needsclick">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
															<span class="svg-icon svg-icon-3hx svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="black" />
																	<path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="black" />
																	<path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="black" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Info-->
															<div class="ms-4">
																<h5 class="dfs-1 fw-bolder text-gray-900 mb-1">Letakan Atau Muat Naik Fail Disini</h5>
																<span class="fw-bold fs-6 text-muted">Muat naik sehingga 10 fail</span>
															</div>
															<!--end::Info-->
														</div>
													</div>
													<!--end::Dropzone-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Markah Prestasi Tahunan (eLPPT/eLNPT) 3 tahun terkini
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Input group-->
												<div class="fv-row mb-5">
													<!--begin::Label-->
													<label class="d-flex align-items-center form-label ms-5">
														<span class="fs-6 fw-bold mb-1">Tahun 1</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input name="jabatan_fakulti" class="form-control form-control-lg form-control-solid"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Input group-->
												<div class="fv-row mb-5">
													<!--begin::Label-->
													<label class="d-flex align-items-center form-label ms-5">
														<span class="fs-6 fw-bold mb-2">Tahun 2</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input name="jabatan_fakulti" class="form-control form-control-lg form-control-solid"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Input group-->
												<div class="fv-row mb-5">
													<!--begin::Label-->
													<label class="d-flex align-items-center form-label ms-5">
														<span class="fs-6 fw-bold mb-2">Tahun 3</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input name="jabatan_fakulti" class="form-control form-control-lg form-control-solid"/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Rangking Universiti Bedasarkan QS World University Ranking
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div class="fs-7 fw-bold text-muted">Luar Negara</div>
													<!--end::Input-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-6 fv-row">
												<!--begin::Input-->
													<input name="jabatan_fakulti" class="form-control form-control-lg form-control-solid"/>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Persediaan fakulti/sekolah bagi mengambil alih tugas pemohon semasa mengikuti program
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan berhubung tempoh Cuti Belajar yang dipohon</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan/sookongan terhadap penyelidikan (bagi program yang diikuti secara penyelidikan)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan lain (jika ada)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="fw-bold me-5">
													<label class="fs-6">Permohonan</label>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="email" checked="checked" />
														<span class="form-check-label fw-bold">Disokong</span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="phone" />
														<span class="form-check-label fw-bold">Tidak Disokong</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Pengarah / Ketua Jabatan</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-20">
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Program yang dipohon sesuai dengan keperluan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Bolehkah pemohon dilepaskan daripada tugasnya dengan tidak menjejaskan perjalanan kuliah/tugas jabatan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Adakah pemohon dijangka mampu menamatkan program yang dipohon dengan jayanya?
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Persediaan fakulti/sekolah bagi mengambil alih tugas pemohon semasa mengikuti program
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan berhubung tempoh Cuti Belajar yang dipohon</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan/sookongan terhadap penyelidikan (bagi program yang diikuti secara penyelidikan)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan lain (jika ada)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="fw-bold me-5">
													<label class="fs-6">Permohonan</label>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="email" checked="checked" />
														<span class="form-check-label fw-bold">Disokong</span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="phone" />
														<span class="form-check-label fw-bold">Tidak Disokong</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Step 5-->
						<div data-kt-stepper-element="content">
							<!--begin::Wrapper-->
							<div class="w-100">
								<!--begin::Heading-->
								<div class="pb-8 pb-lg-10">
									<!--begin::Title-->
									<h2 class="fw-bolder text-dark">Perakuan Urus Setia</h2>
									<!--end::Title-->
									<!--begin::Notice-->
									<div class="text-muted fw-bold fs-6">If you need more info, please
									<a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
									<!--end::Notice-->
								</div>
								<!--end::Heading-->
								<!--begin::Body-->
								<div class="mb-0">
									<!--begin::Input group-->
									<div class="fv-row mb-20">
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Program yang dipohon sesuai dengan keperluan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Bolehkah pemohon dilepaskan daripada tugasnya dengan tidak menjejaskan perjalanan kuliah/tugas jabatan
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Adakah pemohon dijangka mampu menamatkan program yang dipohon dengan jayanya?
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<div class="me-5">
													<!--begin::Label-->
													<label class="fs-5 fw-bold">
													Persediaan fakulti/sekolah bagi mengambil alih tugas pemohon semasa mengikuti program
													</label>
													<!--end::Label-->
												</div>
												<!--end::Label-->
											</div>
											<div class="col-md-2 fv-row">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input" name="billing" type="checkbox" value="1"/>
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold text-muted">Ya</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Input-->
													<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan berhubung tempoh Cuti Belajar yang dipohon</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan/sookongan terhadap penyelidikan (bagi program yang diikuti secara penyelidikan)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Label-->
											<div class="fw-bold me-5 mb-5">
												<label class="fs-6">Ulasan lain (jika ada)</label>
											</div>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="alamat_majikan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5 fv-row">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="fw-bold me-5">
													<label class="fs-6">Permohonan</label>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="email" checked="checked" />
														<span class="form-check-label fw-bold">Disokong</span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input h-20px w-20px" type="radio" name="communication[]" value="phone" />
														<span class="form-check-label fw-bold">Tidak Disokong</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Step 5-->
						<!--begin::Actions-->
						<div class="d-flex flex-stack pt-10">
							<!--begin::Wrapper-->
							<div class="mr-2">
								<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
								<span class="svg-icon svg-icon-4 me-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
										<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->Kembali</button>
							</div>
							<!--end::Wrapper-->
							<!--begin::Wrapper-->
							<div>
								<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
									<span class="indicator-label">Hantar
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-3 ms-2 me-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon--></span>
									<span class="indicator-progress">Sila Tunggu...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Seterusnya
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-4 ms-1 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon--></button>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Stepper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_tbh_anak" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="#">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Borang Maklumat Anak</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">Anak Di Bawah Umur 13 Tahun Yang Akan Menyertai Pemohonan.</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Nama Anak</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Tarikh Lahir</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
								<span class="svg-icon svg-icon-2 position-absolute mx-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
										<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
										<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Datepicker-->
								<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date2" />
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Umur</label>
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_tbh_institusi" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="#">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Borang Maklumat Institusi Pengajian</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">Diploma, Sarjana Muda, Sarjana & Lain-lain</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Universiti/Institusi</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Tahap</label>
							<!--begin::Input-->
							<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
								<option></option>
								<option value="2021">Diploma</option>
								<option value="2022">Sarjana Muda</option>
								<option value="2023">Sarjana</option>
								<option value="2024">Ijazah Doktor Falsafah</option>
							</select>
							<!--end::Input-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Tahun</label>
							<!--begin::Input-->
							<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
								<option></option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
								<option value="2031">2031</option>
							</select>
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Bidang</label>
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							<!--end::Input-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">CGPA</label>
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<?php
include "footer.php";
?>
									