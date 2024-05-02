<?php

interface IUSers{
      function GetIdentity() : string;
      function GetEMail() : string;
      function GetAdresses() : array;
      function __toString();
}