<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Contact
 *
 * @ORM\Table(name="tabContact", indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="email_id", columns={"email_id"}), @ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Contact
{
    use DefaultTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=140, nullable=true)
     */
    private ?string $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middle_name", type="string", length=140, nullable=true)
     */
    private ?string $middleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=140, nullable=true)
     */
    private ?string $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_id", type="string", length=140, nullable=true)
     */
    private ?string $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user", type="string", length=140, nullable=true)
     */
    private ?string $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=140, nullable=true)
     */
    private ?string $address;

    /**
     * @var int
     *
     * @ORM\Column(name="sync_with_google_contacts", type="integer", nullable=false)
     */
    private int $syncWithGoogleContacts= 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=140, nullable=true, options={"default"="Passive"})
     */
    private ?string $status = 'Passive';

    /**
     * @var string|null
     *
     * @ORM\Column(name="salutation", type="string", length=140, nullable=true)
     */
    private ?string $salutation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="string", length=140, nullable=true)
     */
    private ?string $designation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=140, nullable=true)
     */
    private ?string $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=140, nullable=true)
     */
    private ?string $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile_no", type="string", length=140, nullable=true)
     */
    private ?string $mobileNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=140, nullable=true)
     */
    private ?string $companyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_contacts", type="string", length=140, nullable=true)
     */
    private ?string $googleContacts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_contacts_id", type="string", length=140, nullable=true)
     */
    private ?string $googleContactsId;

    /**
     * @var int
     *
     * @ORM\Column(name="pulled_from_google_contacts", type="integer", nullable=false)
     */
    private int $pulledFromGoogleContacts= 0;

    /**
     * @var int
     *
     * @ORM\Column(name="is_primary_contact", type="integer", nullable=false)
     */
    private int $isPrimaryContact= 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=140, nullable=true)
     */
    private ?string $department;

    /**
     * @var int
     *
     * @ORM\Column(name="unsubscribed", type="integer", nullable=false)
     */
    private int $unsubscribed= 0;
    
    /**
     * @var int
     *
     * @ORM\Column(name="is_billing_contact", type="integer", nullable=false)
     */
    private int $isBillingContact= 0;

    //endregion


    //region getter + setter
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * @param string|null $middleName
     */
    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getEmailId(): ?string
    {
        return $this->emailId;
    }

    /**
     * @param string|null $emailId
     */
    public function setEmailId(?string $emailId): void
    {
        $this->emailId = $emailId;
    }

    /**
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param string|null $user
     */
    public function setUser(?string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getSyncWithGoogleContacts(): int
    {
        return $this->syncWithGoogleContacts;
    }

    /**
     * @param int $syncWithGoogleContacts
     */
    public function setSyncWithGoogleContacts(int $syncWithGoogleContacts): void
    {
        $this->syncWithGoogleContacts = $syncWithGoogleContacts;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    /**
     * @param string|null $salutation
     */
    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @return string|null
     */
    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    /**
     * @param string|null $designation
     */
    public function setDesignation(?string $designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getMobileNo(): ?string
    {
        return $this->mobileNo;
    }

    /**
     * @param string|null $mobileNo
     */
    public function setMobileNo(?string $mobileNo): void
    {
        $this->mobileNo = $mobileNo;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $companyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string|null
     */
    public function getGoogleContacts(): ?string
    {
        return $this->googleContacts;
    }

    /**
     * @param string|null $googleContacts
     */
    public function setGoogleContacts(?string $googleContacts): void
    {
        $this->googleContacts = $googleContacts;
    }

    /**
     * @return string|null
     */
    public function getGoogleContactsId(): ?string
    {
        return $this->googleContactsId;
    }

    /**
     * @param string|null $googleContactsId
     */
    public function setGoogleContactsId(?string $googleContactsId): void
    {
        $this->googleContactsId = $googleContactsId;
    }

    /**
     * @return int
     */
    public function getPulledFromGoogleContacts(): int
    {
        return $this->pulledFromGoogleContacts;
    }

    /**
     * @param int $pulledFromGoogleContacts
     */
    public function setPulledFromGoogleContacts(int $pulledFromGoogleContacts): void
    {
        $this->pulledFromGoogleContacts = $pulledFromGoogleContacts;
    }

    /**
     * @return int
     */
    public function getIsPrimaryContact(): int
    {
        return $this->isPrimaryContact;
    }

    /**
     * @param int $isPrimaryContact
     */
    public function setIsPrimaryContact(int $isPrimaryContact): void
    {
        $this->isPrimaryContact = $isPrimaryContact;
    }

    /**
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * @param string|null $department
     */
    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return int
     */
    public function getUnsubscribed(): int
    {
        return $this->unsubscribed;
    }

    /**
     * @param int $unsubscribed
     */
    public function setUnsubscribed(int $unsubscribed): void
    {
        $this->unsubscribed = $unsubscribed;
    }

    /**
     * @return int
     */
    public function getIsBillingContact(): int
    {
        return $this->isBillingContact;
    }

    /**
     * @param int $isBillingContact
     */
    public function setIsBillingContact(int $isBillingContact): void
    {
        $this->isBillingContact = $isBillingContact;
    }
    //endregion
}
