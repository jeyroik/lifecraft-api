<?php
namespace lifecraft\interfaces\avatars;

interface IHaveAvatar
{
    public const FIELD__AVATAR_ID = 'avatar_id';

    public function getAvatarId(): string;
    public function getAvatar(): ?IAvatar;

    public function setAvatarId(string $avatarId): IHaveAvatar;
    public function setAvatar(IAvatar $avatar): IHaveAvatar;
}
