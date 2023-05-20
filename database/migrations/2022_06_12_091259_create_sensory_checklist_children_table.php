<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('sensory_checklist_children', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->json('sensory_checklist')->nullable();
            $table->json('signs_of_tactile_dysfunction')->nullable();
            $table->json('hyposensitivity_to_touch')->nullable();
            $table->json('poor_tactile_perception_and_discrimination')->nullable();
            $table->json('signs_of_vestibular_dysfunction')->nullable();
            $table->json('signs_of_vestibular_dysfunction_under')->nullable();
            $table->json('signs_of_vestibular_dysfunction_coordination')->nullable();
            $table->json('signs_of_vestibular_dysfunction_behaviors')->nullable();
            $table->json('signs_of_vestibular_dysfunction_movement')->nullable();
            
            $table->text("hypersensitivity_to_touch")->nullable();
            $table->text("hypersensitivity_to_touch_1")->nullable();
            $table->text("becomes_fearful")->nullable();
            $table->text("as_an_infant")->nullable();
            $table->text("distressed_when_diaper_is_being")->nullable();
            $table->text("appears_fearful_of")->nullable();
            $table->text("becomes_frightened")->nullable();
            $table->text("complains_about_having_hair_brushed")->nullable();
            $table->text("bothered_by_rough_bed_sheets")->nullable();
            $table->text("resists_friendly")->nullable();
            $table->text("dislikes_kisses")->nullable();
            $table->text( "appears_fearful_of_one")->nullable();
            $table->text("avoids_group_situations")->nullable();
            $table->text("prefers_hugs")->nullable();
           $table->text( "a_raindrop")->nullable();
           $table->text( "may_overreact_to_minor_cuts")->nullable();
           $table->text( "avoids_touching_certain_textures")->nullable();
           $table->text( "refuses_to_wear_new_or_stiff_clothes")->nullable();
           $table->text( "a_raindrop_water_from_the_shower")->nullable();
            $table->text("avoids_using_hands_for_play")->nullable();
           $table->text( "yes_no_avoids")->nullable();
           $table->text( "will_be_distressed_by_dirty_hands")->nullable();
           $table->text( "excessively_ticklish")->nullable();
            $table->text( "distressed_by_seams_in_socks")->nullable();
            $table->text( "distressed_by_clothes_rubbing_on_skin")->nullable();
            $table->text( "may_want_to_wear_long_sleeve_shirts")->nullable();
            $table->text( "distressed_about_having_face_washed")->nullable();
           $table->text( "distressed_about_having_hair")->nullable();
           $table->text( "resists_brushing_teeth")->nullable();
           $table->text( "is_a_picky_eater")->nullable();
           $table->text( "may_refuse_to_walk_barefoot_on_grass_or_sand")->nullable();
           $table->text( "may_walk_on_toes_only")->nullable();

           $table->text( "may_crave_touch")->nullable();
           $table->text( "is_not_aware_of_being_touched")->nullable();
           $table->text( "may_not_be_aware_that_hands")->nullable();
           $table->text( "may_be_self_abusive")->nullable();
           $table->text( "mouths_objects_excessively")->nullable();
           $table->text( "frequently_hurts")->nullable();
           $table->text( "repeatedly_touches_surfaces")->nullable();
           $table->text( "seeks_out_surfaces")->nullable();
           $table->text( "thoroughly_enjoys_and_seeks_out_messy_play")->nullable();
           $table->text(  "craves_vibrating_or_strong_sensory_input")->nullable();

           $table->text( "has_difficulty_with_fine_motor")   ->nullable();
           $table->text( "may_not_be_able_to_identify")      ->nullable();
           $table->text( "maybe_afraid_of_the_dark")        ->nullable();
           $table->text( "may_be_a_messy_dresser")          ->nullable();
           $table->text( "looks_disheveled")->nullable();
           $table->text( "does_not_notice_pants_are_twisted")                       ->nullable();
           $table->text( "shirt_is_half_un_tucked")     ->nullable();
           $table->text( "shoes_are_untied")  ->nullable();
           $table->text( "one_pant_leg_is_up_and_one_is_down")                      ->nullable();
           $table->text( "has_difficulty_using_scissors")  ->nullable();
           $table->text( "crayons_or_silverware")         ->nullable();
           $table->text( "continues_to_mouth_objects")   ->nullable();
           $table->text( "has_difficulty_figuring_out")    ->nullable();
           $table->text( "may_not_be_able_to_identify_objects")                      ->nullable();

            $table->text( "avoids_dislikes_playground_equipment")                    ->nullable();
            $table->text( "prefers_sedentary_tasks")    ->nullable();
            $table->text( "avoids_dislikes_elevators")     ->nullable();
            $table->text( "may_physically_cling_to_an_adult_they_trust")           ->nullable();
            $table->text( "may_appear_terrified_offalling_even")                   ->nullable();
            $table->text( "afraid_of_heights")          ->nullable();
            $table->text( "fearful_of_feet_leaving_the_ground")                      ->nullable();
            $table->text( "fearful_of_going_up_or_down_stairs") ->nullable();
            $table->text( "afraid_of_being_tipped_upside_down")                    ->nullable();
            $table->text( "startles_if_someone_else_moves_them")                     ->nullable();
            $table->text( "as_an_infant_may")  ->nullable();
            $table->text( "may_be_fearful_of")             ->nullable();
            $table->text( "may_have_disliked_being_placed")                        ->nullable();
            $table->text( "loses_balance_easily")         ->nullable();
            $table->text( "fearful_of_activities")         ->nullable();
            $table->text( "avoids_rapid_or_rotating_movements")                     ->nullable();

           $table->text( "in_constant_motion_cant_seem_to_sit_still")               ->nullable();
           $table->text( "loves_being_tossed_in_the_air")   ->nullable();
            // "could_spin_for_hours"         ->nullable();
            // "loves_the_fast_intense_and_or_or_scary_rides_at_amusement_parks"  ->nullable();
           
           $table->text( "loves_to_swing_as_high_as_possible")                      ->nullable();
           $table->text( "is_a_thrill_seeker")            ->nullable();
            // "always_running_jumping_hopping_etc_instead_of_walking"     ->nullable();
            // "rocks_body_shakes_leg_or_head_while_sitting"               ->nullable();
           $table->text( "likes_sudden")   ->nullable();

           $table->text( "in_constant_motion")             ->nullable();
           $table->text( "craves_fast")   ->nullable();
           $table->text( "loves_being_tossed_")           ->nullable();
           $table->text( "could_spin_for_hours")         ->nullable();
           $table->text( "loves_the_fast") ->nullable();
           $table->text( "always_jumping_on_furniture")    ->nullable();
           $table->text( "loves_to_swing_as_high")         ->nullable();
           $table->text( "is_a_thrill-seeker")            ->nullable();
           $table->text( "always_running")   ->nullable();
           $table->text( "rocks_body")     ->nullable();
           $table->text( "loves_being_tossed") ->nullable();
        
           $table->text( "has_a_limp")->nullable();
           $table->text( "frequently_slumps")            ->nullable();
           $table->text( "difficulty_simultaneously_lifting_head")                   ->nullable();
           $table->text( "often_sits_in_a")->nullable();
           $table->text( "fatigues_easily")  ->nullable();
            $table->text( "difficulty_turning_doorknobs")     ->nullable();
            $table->text( "difficulty_catching_him")         ->nullable();
            $table->text( "difficulty_getting_dressed")          ->nullable();
            $table->text( "may_have_never_crawled_as_an_baby")                       ->nullable();
           $table->text( "has_poor_body_awareness")         ->nullable();
           $table->text( "poor_gross_motor_skills")         ->nullable();
           $table->text( "poor_fine_motor_skills")         ->nullable();
           $table->text( "may_appear_ambidextrous")         ->nullable();
           $table->text( "has_difficulty_licking")         ->nullable();
           $table->text( "seems_to_be_unsure_about")         ->nullable();
           $table->text( "difficulty_learning")   ->nullable();

            $table->text( "seeks_out_jumping_bumping")       ->nullable();
            $table->text( "stomps_feet_when_walking")        ->nullable();
            $table->text( "kicks_his_her_feet_on_floor_or_chair")->nullable();
            $table->text( "bites_or_sucks_on_fingers_and")     ->nullable();
            $table->text("prefrs_clothees")->nullable();
            $table->text( "loves_seeks_out")->nullable();
            $table->text(  "may_not_understand_the_idea_")  ->nullable();
            $table->text( "loves_or_seeks_out_squishing_activities")             ->nullable();
            $table->text(  "enjoys_bear_hugs")          ->nullable();
            $table->text( "excessive_banging")             ->nullable();
            $table->text( "loves_roughhousing_and_tackling")                        ->nullable();
            $table->text(  "frequently_falls_on_floor_intentionally")                 ->nullable();
            $table->text( "would_jump_on_a_trampoline")->nullable();
           $table->text(  "grinds_his_her_teeth_throughout_the_day")              ->nullable();
           $table->text(  "loves_pushing_pulling")         ->nullable();
           $table->text(  "loves_jumping_off_furniture")    ->nullable();
           $table->text(  "frequently_hits")            ->nullable();
           $table->text(  "chews_on_pens")                  ->nullable();

           $table->text("misjudges_how_much_to_flex")     ->nullable();
           $table->text( "difficulty_regulating_pressure")   ->nullable();
           $table->text( "kicks_his_her_feet_on_floor")    ->nullable();
           $table->text( "written_work_is_messy")        ->nullable();
           $table->text( "always_seems_to_be_breaking")     ->nullable();
           $table->text( "misjudges_the_weight_of_an_object")                      ->nullable();
           $table->text( "may_not_understand_the_idea_of")  ->nullable();
           $table->text( "seems_to_do_everything_with")    ->nullable();
           $table->text( "plays_with_animals")             ->nullable();
           $table->timestamps();

           $table->text( "loses_balance")->nullable();
           
           $table->text("becomes_fearful_1")->nullable();
           $table->text("as_an_infant_1")->nullable();
           $table->text("distressed_when_diaper_is_being_1")->nullable();
           $table->text("appears_fearful_of_1")->nullable();
           $table->text("becomes_frightened_1")->nullable();
           $table->text("complains_about_having_hair_brushed_1")->nullable();
           $table->text("Dislikes_kisses_1")->nullable();
           $table->text("Dislikes_kisses_2")->nullable();
           $table->text("Dislikes_kisses_3")->nullable();
           $table->text("prefers_hugs_1")->nullable();
           $table->text("prefers_hugs_2")->nullable();
           $table->text("a_raindrop_1")->nullable();
           $table->text("may_overreact_to_minor_cuts_1")->nullable();
           $table->text("a_raindrop_water_from_the_shower_1")->nullable();
           $table->text("avoids_using_hands_for_play_1")->nullable();
           $table->text("yes_No_Avoids_1")->nullable();
           $table->text("will_be_distressed_by_dirty_hands_1")->nullable();
           $table->text("distressed_by_seams_in_socks_1")->nullable();
           $table->text("distressed_by_seams_in_socks_2")->nullable();
           $table->text("distressed_by_clothes_rubbing_on_skin_1")->nullable();
           $table->text("distressed_by_clothes_rubbing_on_skin_2")->nullable();
           $table->text("may_want_to_wear_long_sleeve_shirts_1")->nullable();
           $table->text("may_want_to_wear_long_sleeve_shirts_2")->nullable();
           $table->text("distressed_about_having_face_washed_1")->nullable();
           $table->text("distressed_about_having_face_washed_2")->nullable();
           $table->text("distressed_about_having_hair_1")->nullable();
           $table->text("distressed_about_having_hair_2")->nullable();
           $table->text("resists_brushing_teeth_1")->nullable();
           $table->text("resists_brushing_teeth_2")->nullable();
           $table->text("resists_brushing_teeth_3")->nullable();
           $table->text("is_a_picky_eater_1")->nullable();
           $table->text("may_refuse_to_walk_barefoot_on_grass_or_sand_1")->nullable();
           $table->text("may_walk_on_toes_only_1")->nullable();
           $table->text("is_not_aware_of_being_touched_1")->nullable();
           $table->text("is_not_bothered_by_injuries_1")->nullable();
           $table->text("is_not_bothered_by_injuries_2")->nullable();
           $table->text("may_not_be_aware_that_hands_1")->nullable();
           $table->text("may_not_be_aware_that_hands_2")->nullable();
           $table->text("may_be_self_abusive_1")->nullable();
           $table->text("mouths_objects_excessively_1")->nullable();
           $table->text("repeatedly_touches_surfaces_1")->nullable();
           $table->text("seeks_out_surfaces_1")->nullable();
           $table->text("craves_vibrating_1")->nullable();
           $table->text("has_a_preference_1")->nullable();
           $table->text("maybe_afraid_ofthe_dark_1")->nullable();
           $table->text("crayons_or_silverware_1")->nullable();
           $table->text("avoids_dislikes_playground_equipment_1")->nullable();
           $table->text("Prefers_sedentary_tasks_1")->nullable();
           $table->text("avoids_dislikes_elevators_1")->nullable();
           $table->text("may_appear_terrified_offalling_even_1")->nullable();
           $table->text("afraid_of_heights_1")->nullable();
           $table->text("fearful_of_feet_leaving_the_ground_1")->nullable();
           $table->text("fearful_of_going_up_or_down_stairs_1")->nullable();
           $table->text("afraid_of_being_tipped_upside_down_1")->nullable();
           $table->text("startles_if_someone_else_moves_them_1")->nullable();
           
           $table->text("may_be_fearful_of_1")->nullable();
           $table->text("may_have_disliked_being_placed_1")->nullable();
           $table->text("avoids_rapid_or_rotating_movements_1")->nullable();
           $table->text("frequently_slumps_1")->nullable();
           $table->text("often_sits_in_a_1")->nullable();
           $table->text("may_have_never_crawled_as_an_baby_1")->nullable();
           $table->text("poor_gross_motor_skills_1")->nullable();
           $table->text("poor_fine_motor_skills_1")->nullable();
           $table->text("has_difficulty_licking_1")->nullable();
           $table->text("difficulty_learning_1")->nullable();
           $table->text("loves_to_be_tightly_wrapped_1")->nullable();
           $table->text("loves_seeksa_1")->nullable();
           $table->text("enjoys_bear_hugs_1")->nullable();
           $table->text("enjoys_bear_hugs_2")->nullable();
           $table->text("excessive_banging_1")->nullable();
           $table->text("loves_roughhousing_1")->nullable();
           $table->text("frequently_falls_on_floor_intentionally_1")->nullable();
           $table->text("would_jump_on_a_trampoline_1")->nullable();
           $table->text("loves_pushing_pulling_1")->nullable();
           $table->text("loves_jumping_off_furniture_1")->nullable();
           $table->text("frequently_hits_1")->nullable();
           $table->text("frequently_hits_2")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensory_checklist_children');
    }
};
