<?php

namespace App\Business\Services;

use App\Business\Interfaces\ITicketsService;
use App\Business\Interfaces\IFinancesService;
use App\Business\Models\TicketModel;

class TicketsService implements ITicketsService {

	protected $_fs;


	public function __construct(IFinancesService $fs) {
		$this->_fs = $fs;
	}

	/*
		Purcahses a ticket
	*/
	public function PurchaseTicket($raffleId) {
		// Using the raffle id get the raffle information

		// Using the raffle ticket price, check to see if the user can buy a ticket.

		// If they can buy a ticket, check to see if there are tickets available for the raffle

		// If there are create a new ticket

		// deduct the ticket price from the users account balance

		// Update the raffle current ticket field

		// Return status code.
	}

	/*
		Refunds a ticket
	*/
	public function RefundTicket($ticketId) {
		
		// Get the raffle information from the ticket

		// Decrement the current number of tickets column for the raffle

		// Refund the ticket price to the users account

		// Delete the ticket ( acutally setting the isDeleted to true)

	}
}

?>