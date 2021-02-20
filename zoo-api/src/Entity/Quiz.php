<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\QuizRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
*       itemOperations={
*       "get"={
*          "normalization_context"={"groups"="product:item"}
*       },
*       "delete",
*       "put",
*       "patch"}
*    )
 * @ORM\Entity(repositoryClass=QuizRepository::class)
 */
class Quiz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quiz_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $best_score;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_make;


    /**
     * @ORM\OneToMany(targetEntity=Question::class, cascade={"persist", "remove"}, mappedBy="quiz")
     */
    public $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuizName(): ?string
    {
        return $this->quiz_name;
    }

    public function setQuizName(string $quiz_name): self
    {
        $this->quiz_name = $quiz_name;

        return $this;
    }

    public function getBestScore(): ?int
    {
        return $this->best_score;
    }

    public function setBestScore(int $best_score): self
    {
        $this->best_score = $best_score;

        return $this;
    }

    public function getIsMake(): ?bool
    {
        return $this->is_make;
    }

    public function setIsMake(bool $is_make): self
    {
        $this->is_make = $is_make;

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
        }
        return $this;
    }
}
