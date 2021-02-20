<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\QuestionRepository;
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
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
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
    private $question;

    /**
     * @ORM\Column(type="boolean")
     */
    private $good_answer;

    /**
     * @ORM\OneToMany(targetEntity=Answer::class, cascade={"persist", "remove"}, mappedBy="question")
     */
    public $answers;

    /**
     * @ORM\ManyToOne(targetEntity=Quiz::class, inversedBy="questions")
     */
    private $quiz;

    public function __construct()
    {
        $this->id = Uuid::v4()->toRfc4122();
        $this->answers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getGoodAnswer(): ?bool
    {
        return $this->good_answer;
    }

    public function setGoodAnswer(bool $good_answer): self
    {
        $this->good_answer = $good_answer;

        return $this;
    }

    /**
     * @return Collection|Answer[]
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    public function addAnswer(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
        }

        return $this;
    }

    public function removeAnswer(Answer $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
        }
        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): self
    {
        $this->quiz = $quiz;

        return $this;
    }
}
