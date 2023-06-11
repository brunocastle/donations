<?php

namespace App\Http\Enums;
enum RequestType: int
{
    case Food = 1;
    case Clothing = 2;
    case Toys = 3;
    case Books = 4;
    case SchoolSupplies = 5;
//    case Furniture = 6;
//    case Appliances = 7;
//    case HouseholdItems = 8;
//    case PersonalHygieneProducts = 9;
    case Medications = 10;
//    case MedicalEquipment = 11;
//    case ComputerAccessories = 12;
//    case RenovationServices = 13;
//    case PaintingServices = 14;
//    case CleaningServices = 15;
    case VolunteerWork = 16;
//    case BloodDonation = 17;
//    case OrganDonation = 18;
//    case EducationAndTraining = 19;
//    case PsychologicalSupport = 20;

    public function getName(): string
    {
        return match ($this) {
            RequestType::Books => __('request-type.books'),
            RequestType::Clothing => __('request-type.clothing'),
            RequestType::Food => __('request-type.food'),
            RequestType::Medications => __('request-type.medications'),
            RequestType::SchoolSupplies => __('request-type.school_supplies'),
            RequestType::Toys => __('request-type.toys'),
            RequestType::VolunteerWork => __('request-type.volunteer_work'),
        };
    }
}
