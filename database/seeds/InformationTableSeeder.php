<?php

use Illuminate\Database\Seeder;

class InformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            [
                'prod_profile' => 'it is a ready-mixed mortar.$Used for all plastering and masonry works.$Can be supplied in different colors.$Lasts for 72 hours.',
                'prod_benefits' => 'Ready to use with no further mixing.$Superb workability without excessive air content.$Effective life of two working days without setting.$Save time and manpower.',
                'prod_applications' => 'Ready to use plastering.$Isolation protection.',
                'product_id' => 1,
            ],
            [
                'prod_profile' => 'High fluidity and consistency.$Self-leveling.$Maintain rheology properties.$Pumpable.$High viscosity.$Low tendency to segregation',
                'prod_benefits' => '',
                'prod_applications' => 'Piles.$Foundations.$Congested reinforcement.$Architectural work.$Thin elements (Walls)',
                'product_id' => 2,
            ],
            [
                'prod_profile' => 'Guaranteed strength at 24, 48 and 72 hours.$Flow-able concrete for 2 hours.$Low Water: Cement Ratio',
                'prod_benefits' => 'Faster formwork cycle.$More efficient project resource management.$Saving in project time schedule.$High Quality of product.$Optimization in production cycle',
                'prod_applications' => 'Roofs.$Beams.$Precast elements.$Slab on grades',
                'product_id' => 3,
            ],
            [
                'prod_profile' => 'Steel Crete: A composite materials made with Portland cement, aggregate, and incorporating discrete discontinuous fibers.$Fibers suitable for reinforcing concrete have been produced from steel.',
                'prod_benefits' => 'Increases flexural toughness/ residual strength.$Increased load bearing capacity of concrete.Potential reduction of concrete slab depth.$Provides post-crack performance.$Increased durability and reduced maintenance cost.$Joint less floors up to 1000 m2',
                'prod_applications' => 'All slab on grade applications.$Parking areas.$Walk way',
                'product_id' => 4,
            ],
            [
                'prod_profile' => 'Based on introducing Polypropylene Fibber in conventional and special concretes to REDUCE plastic shrinkage cracking.$Due to hot weather in Egypt, quick evaporation and hot wind, poured concrete especially slabs are subject to plastic shrinkage.',
                'prod_benefits' => 'Reduce plastic shrinkage.$Reduce bleeding.$Increase Cohesion of the mix.$Replace nonstructural steel (crack control steel).$Increase durability.$Increase abrasion resistance.$Easier pump ability.$Reduce total cost of m2',
                'prod_applications' => 'Internal floor slabs (warehouse, stores).$Roads, sidewalks.$Water retaining structures, marine applications.$External slabs (yards, driveways).$Factory Floors.$Joint less floors.$Petrol stations.$Fluid tight floors.$Internal floor-slabs (retails stores, warehouses, etc.)',
                'product_id' => 5,
            ],
            [
                'prod_profile' => 'Colored concrete for architectural, decorative and textured concrete finishing',
                'prod_benefits' => 'Wide range of colors available.$No powders to be added after pouring.$Superior landscape and decorative designs',
                'prod_applications' => 'All concrete work/ Internal & External Floors/ Pavements/ Walls.$UNIcolor – UNIstamp – UNIpolish- UNIStone – UNIExpose',
                'product_id' => 6,
            ],
            [
                'prod_profile' => 'Heavyweight concrete uses heavy natural aggregates such as: barites, magnetite or manufactured aggregates such as: iron or lead shot. The main land-based application is for radiation shielding (medical or nuclear). Offshore, heavyweight concrete is used for ballasting for pipelines and similar structures. The density achieved will depend on the type of aggregate used. When typically using barites, the density will be in the region of 3,500kg/m 3, which is 45% greater than that of normal concrete. While with magnetite, the density will be 3,900kg/m3, or 60% greater than normal concrete. Very heavy concretes can be achieved with iron or lead shot as aggregate, 5,900kg/m 3 and 8,900kg/m3 respectively.',
                'prod_benefits' => '',
                'prod_applications' => '',
                'product_id' => 7,
            ],
            [
                'prod_profile' => 'Low w/cm ratio: 0.16 to 0.24 (as low as 0.13).$Type 20M (like type II) Portland cement (no C3A less HoH).$Silica fume (25% by weight).$Water.$High dosages of superplasticizer.$Fine quartz sand (150-600μm) (SG=2.75).$Steel fibers (2.5-10% by volume) for toughening.$No rebar needed!',
                'prod_benefits' => 'Compressive Strength: Up to 120,000 psi (150 to 300 MPa!).$Tensile Strength: 3000 to 7000 psi (20 to 50 MPa, twice as strong as normal concrete in compression).$6-13 MPa tensile strength after first cracking!.$Young’s Modulus 50 to 75 GPa.$Fracture energies ranging from 15,000 to 40,000 J/m² (plastic failure rather than brittle) Basically, structures needing light and thin components like: roofs for stadiums, long bridge spans, and anything that needs extra safety or security such as blast resistant.',
                'prod_applications' => '',
                'product_id' => 8,
            ],
        ]);
    }
}
